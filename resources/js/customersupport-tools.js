
function copyToClipboard(id){
    // Get the text field
    const copyText = document.getElementById(id); 

    // Select the text field
    if (copyText) {
            const textToCopy = copyText.innerText || copyText.value || "";
            navigator.clipboard.writeText(textToCopy)
                .then(() => 
                {
                    console.log("Copied to clipboard:", textToCopy);
                    copyText.classList.remove("pulse");
                    void copyText.offsetWidth; // force reflow to retrigger animation
                    copyText.classList.add("pulse");

                })
                .catch(err => console.error("Failed to copy text:", err));
    } else {
        console.error("Element not found with id:", id);
    }
}

function enableBuyerEdit() {
        // Toggle display/input
        console.log('pressed enableBuyerEdit');
        document.getElementById('buyer-name-display').classList.add('hidden');
        document.getElementById('buyer-name-input').classList.remove('hidden');

        // Toggle buttons
        document.getElementById('edit-buyer-btn').classList.add('hidden');
        document.getElementById('save-buyer-btn').classList.remove('hidden');
    }



// Allow Each Function To be Global
window.copyToClipboard = copyToClipboard;
window.enableBuyerEdit = enableBuyerEdit;