
        // Attach a click event listener to the button
        withdrawButton.getElementById("withdrawbutton").addEventListener("click",function() {
            // Perform the withdrawal logic here
            const withdrawButton = document.getElementById("withdrawButton");
            const displayText = document.getElementById("displayText");
 
            withdrawButton.addEventListener("submit", function() {
            // Display an alert message
            displayText.style.display = "block";
            });
            window.alert("Withdrawal successful!");
        });
        
