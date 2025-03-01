document.getElementById("usernote").addEventListener("submit", function (event) {
    setTimeout(function () {
        const outputSection = document.getElementById("outputSection");
        if (outputSection.innerHTML.trim() !== "") {
            outputSection.style.display = "block";
        }
    }, 500); // Delay to wait for PHP response
});
