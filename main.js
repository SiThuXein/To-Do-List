
// create a new list item when clicking on the "Add" button
function addItem(){
  var item=document.getElementById("myInput").value;
  var text=document.createTextNode(item);
  var newItem=document.createElement("li");
  newItem.appendChild(text);
  if(item === ""){
    window.alert("Write something!");
  }
  else{
    document.getElementById("myUL").appendChild(newItem);
  }

}
