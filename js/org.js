// Your existing JavaScript code here

// Add button event listener
document.getElementById("addNodeBtn").addEventListener("click", function() {
    // Define the data for the new node
    const newNodeData = {
        id: "1", // Replace with a unique ID for the new node
        img: "https://avatar.iran.liara.run/public/5", // Change to the desired image URL for the new employee
    };

    // Add the new node to the chart
    chart.addNode(newNodeData);
});


