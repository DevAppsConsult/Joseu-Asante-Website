<script>

window.onload = function(){
  document.onselectstart = function(){
    return false;
  }
  document.body.onselectstart = function() { return false; } // Or any html object
  document.body.onmousedown = function() { return false; } // valid for any html object as well
  clearSelection();
}

function clearSelection() {
    if(document.selection && document.selection.empty) {
        document.selection.empty();
    } else if(window.getSelection) {
        var sel = window.getSelection();
        sel.removeAllRanges();
    }
}

</script>