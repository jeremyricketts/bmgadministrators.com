/* give anchors with attribute rel="external" a target attribute of "_blank" */
function external() {
 if (document.getElementsByTagName) {
  var i, a;
  a = document.getElementsByTagName('a');
  for (i in a) {
   if (a[i].getAttribute('href') && a[i].getAttribute('rel') == 'external') a[i].target = '_blank';
  }
 }
}