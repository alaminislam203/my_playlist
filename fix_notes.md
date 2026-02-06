# Bug Fix: Headline Visibility in Breaking Now and News Portal Templates

## Issue
In the 'Breaking Now' and 'News Portal' templates, the headlines were hidden because they were nested inside a container DIV that was being set to `display: none` by the `updatePreview()` function.

## Fix
1. Moved `#headline-layer` and `#subhead-layer` outside the footer container.
2. Updated the JavaScript selector to target a specific footer container class.
3. Corrected invalid CSS property `position: 'center'` to `'absolute'`.
4. Fixed incorrect element IDs in font control functions.
