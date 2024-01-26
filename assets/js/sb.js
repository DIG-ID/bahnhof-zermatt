// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

    (function (i, s, o, g, r, a, m) {
      i['SBSyncroBoxParam'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://cdn.simplebooking.it/search-box-script.axd?IDA=3769','SBSyncroBox');
        
      SBSyncroBox({
        CodLang: 'DE',
        Styles: {
        Theme: 'light-pink',
        CustomBGColor:'#FFFFFF',
        CustomColor:'#000000',
        CustomLabelColor:'#000000',
        CustomButtonBGColor:'#ff5050',
        CustomButtonColor:'#ffffff',
        CustomButtonHoverBGColor:'#ff5050',
        },
      });
      
      SBSyncroBox({
        CodLang: 'EN',
        MainContainerId: 'sb-container-modal',
        Styles: {
        Theme: 'light-pink',
        CustomBGColor:'#FFFFFF',
        CustomColor:'#000000',
        CustomLabelColor:'#000000',
        CustomButtonBGColor:'#ff5050',
        CustomButtonColor:'#ffffff',
        CustomButtonHoverBGColor:'#ff5050',
      },
      });
 
  }, false);
});
