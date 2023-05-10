// Get the cursor element
export const cursor = document.getElementById('blinking');

// Create a function to toggle the visibility of the cursor
export function toggleCursor() {
  cursor.style.visibility = (cursor.style.visibility === 'visible') ? 'hidden' : 'visible';
}


