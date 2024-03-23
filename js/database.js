//JavaScript

let chart = new OrgChart(document.getElementById("tree"), {
    template: "diva",
    enableSearch: false,
    mouseScrool: OrgChart.action.none,
    nodeBinding: {
        field_0: "Name",
        field_1: "Position",
        img_0: "img"
    },
mouseScrool: OrgChart.action.none,
nodeMenu: {
    add: {text: "Add New"},
    edit: {text: "Edit"},
    remove: {text: "Remove"}
},
editForm: {
    photoBinding: "img",
    elements: [
        { type: 'textbox', label: 'Photo Url', binding: 'img', btn: 'Upload' },
    ]
},
nodeBinding: {
    field_0: "Name",
    field_1: "Position",
    img_0: "img"
},
menu: {
    pdf: { text: "Export PDF" },
    png: { text: "Export PNG" },
    json: { text: "Export JSON" },
    importJSON: { text: "Import JSON", icon: OrgChart.icon.json(24, 24, 'red'), onClick: importJSONHandler },
}
});

function png(nodeId) {
    chart.exportPNG({filename: "C:/xampp/htdocs/UniGuide/images/MyFileName.png", expandChildren: true, nodeId: nodeId});
}

chart.on('exportstart', function(sender, args){
    args.styles += document.getElementById('myStyles').outerHTML;
  });

function importJSONHandler() {
chart.importJSON();
}

chart.onUpdateNode(function(args){
//post the data from args to your server
});


chart.onRemoveNode(function(args){
//post the data from args to your server
});


chart.onAddNode(function(args){
//post the data from args to your server
});


chart.editUI.on('element-btn-click', function (sender, args) {
OrgChart.fileUploadDialog(function (file) {
    let formData = new FormData();
    formData.append('file', file);
    alert('upload the file');
    console.log(args);
})
});

chart.load([

]);
