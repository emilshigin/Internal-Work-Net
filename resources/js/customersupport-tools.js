
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

window.copyToClipboard = copyToClipboard;