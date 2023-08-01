const buttons = document.querySelectorAll('.button');
const selectedStates = {};

// Function to deselect all buttons
function deselectAllButtons() {
  buttons.forEach((button) => {
    button.dataset.selected = 'false';
    selectedStates[button.dataset.buttonId] = false;
  });
}

// Function to handle button clicks and update selected states
function handleButtonClick(button) {
  const buttonId = button.dataset.buttonId;
  if (selectedStates[buttonId] === false) {
    deselectAllButtons();
    button.dataset.selected = 'true';
    selectedStates[buttonId] = true;
    console.log(`Button ${button.innerText} (ID: ${buttonId}) is now selected.`);
  } else {
    button.dataset.selected = 'false';
    selectedStates[buttonId] = false;
    console.log(`Button ${button.innerText} (ID: ${buttonId}) is now unselected.`);
  }
}

// Add click event listener to each button from 1 to 10
buttons.forEach((button) => {
  button.addEventListener('click', () => handleButtonClick(button));
});
