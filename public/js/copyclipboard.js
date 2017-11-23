window.copyToClipboard = function (node) {
  // Skip IE < 9 which uses TextRange instead of Range
  if (!window.getSelection) {
    return false;
  }

  var doc = document;
  var result = false;
  var ranges = [];
  var selection = window.getSelection();

  if (typeof node === 'string' || node instanceof String) {
    var container = doc.createElement('div');
    container.appendChild(doc.createTextNode(node));
    
    doc.body.appendChild(container);
    result = copyToClipboard(container);
    doc.body.removeChild(container); 

    return result;
  }

  for(var i = 0; i < selection.rangeCount; i++) {
    ranges[i] = selection.getRangeAt(i);
  }

  selection.selectAllChildren(node);

  try {  
    result = doc.execCommand('copy');
  } catch(err) { }

  // Restore previous selection if any
  selection.removeAllRanges();
  ranges.forEach(selection.addRange.bind(selection));

  return result;
};