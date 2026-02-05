<?php
/**
 * Backend AJAX Handler for AI Content & SEO Suite
 * Add this code to your theme's functions.php or a custom plugin.
 */

// Handle the AJAX request for both logged-in and non-logged-in users
add_action('wp_ajax_qalbe_ai_chat', 'handle_qalbe_ai_chat');
add_action('wp_ajax_nopriv_qalbe_ai_chat', 'handle_qalbe_ai_chat');

function handle_qalbe_ai_chat() {
    // 1. Security Check: Verify Nonce
    if (!isset($_POST['security']) || !wp_verify_nonce($_POST['security'], 'qalbe_ai_nonce')) {
        wp_send_json_error(['message' => 'Security check failed. Please refresh the page.']);
    }

    // 2. Validate Input
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';
    if (empty($message)) {
        wp_send_json_error(['message' => 'Message is empty.']);
    }

    // 3. Call Gemini API
    // Replace 'YOUR_GEMINI_API_KEY' with your actual Google Gemini API Key
    $api_key = 'YOUR_GEMINI_API_KEY';

    // You can also store the API key in wp-config.php or as a WordPress option for better security:
    // $api_key = defined('GEMINI_API_KEY') ? GEMINI_API_KEY : get_option('gemini_api_key');

    if (!$api_key || $api_key === 'YOUR_GEMINI_API_KEY') {
        wp_send_json_error(['message' => 'API Key not configured. Please add your Gemini API key in the backend.']);
    }

    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=" . $api_key;

    $body = [
        'contents' => [
            [
                'parts' => [
                    ['text' => $message]
                ]
            ]
        ]
    ];

    $args = [
        'body'        => json_encode($body),
        'timeout'     => 60,
        'redirection' => 5,
        'httpversion' => '1.0',
        'blocking'    => true,
        'headers'     => [
            'Content-Type' => 'application/json',
        ],
        'cookies'     => array(),
    ];

    $response = wp_remote_post($url, $args);

    // 4. Handle API Response
    if (is_wp_error($response)) {
        wp_send_json_error(['message' => 'API Request Failed: ' . $response->get_error_message()]);
    }

    $response_code = wp_remote_retrieve_response_code($response);
    $response_body = wp_remote_retrieve_body($response);

    if ($response_code !== 200) {
        $error_data = json_decode($response_body, true);
        $error_message = isset($error_data['error']['message']) ? $error_data['error']['message'] : 'Unknown API Error';
        wp_send_json_error(['message' => 'Gemini API Error: ' . $error_message]);
    }

    $result = json_decode($response_body, true);

    // Extract the text from Gemini response structure
    if (isset($result['candidates'][0]['content']['parts'][0]['text'])) {
        $ai_text = $result['candidates'][0]['content']['parts'][0]['text'];
        wp_send_json_success($ai_text);
    } else {
        wp_send_json_error(['message' => 'Failed to parse AI response.']);
    }
}
