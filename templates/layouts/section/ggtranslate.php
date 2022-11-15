
<ul class="h-lang list">
<li><a href="#" onclick="doGTranslate('en|vi');return false;" title="Việt Nam"><img src="assets/images/vi.png" height="24" width="24" alt="en" /></a></li>
    <li><a href="#" onclick="doGTranslate('vi|en');return false;" title="English"><img src="assets/images/en.png" height="24" width="24" alt="en" /></a></li>
    <li><a href="#" onclick="doGTranslate('vi|ja');return false;" title="Japanese"><img src="assets/images/FLAG/ja.png" height="24" width="24" alt="jp" /></a></li>
    <li><a href="#" onclick="doGTranslate('vi|ko');return false;" title="Korean"><img src="assets/images/FLAG/hanquoc.png" height="24" width="24" alt="ko" /></a></li>
</ul>

<div id="google_translate_element2"></div>

<script>

function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'vi',autoDisplay: false}, 'google_translate_element2');}

</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<style>

#goog-gt-tt {display:none !important;}

.goog-te-banner-frame {display:none !important;}

.goog-te-menu-value:hover {text-decoration:none !important;}

.goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}

body {top:0 !important;}

#google_translate_element2 {display:none!important;}

ul.h-lang{display: flex;padding: 0px 10px;gap: 20px;}
ul.h-lang>li>a {
    padding: 0 !important;
}

</style>



<script>

function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}

function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}

function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(sel[i].className.indexOf('goog-te-combo')!=-1){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}

if(GTranslateGetCurrentLang() != null)jQuery(document).ready(function() {var lang_html = jQuery('div.switcher div.option').find('img[alt="'+GTranslateGetCurrentLang()+'"]').parent().html();if(typeof lang_html != 'undefined')jQuery('div.switcher div.selected a').html(lang_html.replace('data-gt-lazy-', ''));});

</script>