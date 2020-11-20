<?php

/* login_info plugin
   http://www.std-soft.com/index.php/hm-service/81-c-std-service-code/2-text-auf-der-login-seite-einblenden

   This plugin uses config.inc.php for all visitors.
   If you rather want different localized messages DO NOT use config.inc.php but localization/your_LANG.inc instead.
*/

// use localization ? true/false => see examples in dir localization
$rcmail_config['custom_login_info_localization'] = false;

// put your message before and/or after the login form
// set to false if not used
//$rcmail_config['custom_login_info_before'] = '<img style="display:block;margin-left:auto;margin-right:auto;" src="plugins/login_info/media/plugin_login_info.png" />';
$rcmail_config['custom_login_info_before'] = '<div style="margin-bottom: 1.5rem; font-size: 20px;font-weight: bold;">Добро пожаловать на почтовый сервер ФИЦ КНЦ РАН!</div>';
//$rcmail_config['custom_login_info_after'] = '<div style="display:block;margin-left:auto;margin-right:auto;width:455px;border-radius:5px;padding:10px;background-color:lightgrey;text-align:center;color:red;"><br />Aus Sicherheitsgründen ist hier nur ein https (gesicherter) Zugang möglich.<br />Sollte Ihr Browser <b>vorher</b> einen Fehler oder eine Warnung angezeigt haben,<br />klicken Sie bitte einmal vor dem Einloggen auf die zwei folgenden Links und<br />installieren die beiden Zertifikate von <a title="Root Zertifikate von CAcert" href="http://www.cacert.org/index.php?id=3" target="cacert"><img src="plugins/login_info/media/CAcert-ssl-security.png" alt="www.cacert.org" style="vertical-align:text-bottom;border-width:0px;" /></a><br /><br />1. <a href="http://www.cacert.org/certs/root.crt" target="cacert" title="get CAcert root Class 1 PKI Key">CAcert Root Zertifikat (Class 1 PKI Key)</a><br />2. <a href="http://www.cacert.org/certs/class3.crt" target="cacert" title="get CAcert Intermedite Class 3 PKI Key">CAcert Root Zertifikat (Class 3 PKI Key)</a><div>';
//$rcmail_config['custom_login_info_after'] = false;
$rcmail_config['custom_login_info_after'] = '<style>
/*
Pure CSS modal box
Author: Jorge Chavez
Github: http://github.com/jorgechavz
*/

#modal_trigger {
    top: 20vh;
    cursor:pointer;
    position: relative;
}
#footer_powered {
    width: 100%;
    position: absolute;
    display: block;
    align-items: center;
    justify-content: center;
    bottom: 0px;
    text-align: center;
}
.modal1 .checkbox{
  display: none;
}

/* Gray background */
.modal1 .modal-overlay{
  opacity: 0;
  transition: all 0.3s ease;
  width: 50%;
  position: absolute;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -100;
  transform: scale(1);
  display: none;
  background-color: rgba(0,0,0,0.7);
}

/* Box */
.modal1 .modal-wrap{
  background-color: #ddd;
  box-shadow: 3px 3px 3px rgba(0,0,0,0.2);
  padding: 40px 50px;
  width: 60%;
  margin: 20px auto;
  align-self: flex-start;
  border-radius: 2px;
  transition: all 0.5s ease;
}
.modal1 .modal-wrap.small{
  width: 30%;
}
.modal1 .modal-wrap.full{
  width: 100%;
  height: 100%;
}

.modal1 .modal-wrap.a-center {
  align-self: center;
}
.modal1 .modal-wrap.from-left {
  transform: translateX(-100%);
}
.modal1 .modal-wrap.from-right {
  transform: translateX(100%);
}
.modal1 .modal-wrap.from-top {
  transform: translateY(-100%);
}
.modal1 .modal-wrap.from-bottom {
  transform: translateY(100%);
}


/* Close button */
.modal1 .modal-overlay .close{
  position: absolute;
  right: 10px;
  top: 10px;
  font-size: 40px;
  width: 30px;
  height: 30px;
  color: #282c34;
}

.modal1 .modal-overlay .close:hover{
  cursor: pointer;
  color: #4b5361;
}


 .modal1 .o-close {
   width: 100%;
   height: 100%;
   position: fixed;
   left: 0;
   top: 0;
   z-index: -100;
 }

.modal1 input:checked ~ .o-close {
  z-index: 9998;
}
.modal1 input:checked ~ .modal-overlay{
  transform: scale(1);
  opacity:1;
  z-index: 9997;
  overflow: auto;
  display: flex;
  animation-duration: 0.5s;
  animation-name: fade-in;
  -moz-animation-duration: 0.5s;
  -moz-animation-name: fade-in;
  -webkit-animation-duration: 0.5s;
  -webkit-animation-name: fade-in;
}
.modal1 input:checked ~ .modal-overlay .modal-wrap {
  transform: translateY(0);
  z-index: 9999;
  text-align: justify;
}

/* Responsive Design */
/* Tablet size */
@media (max-width: 800px){
  .modal1 .modal-wrap {
    width: 80%;
    padding: 20px;
  }
}

/* Phone size */
@media (max-width: 500px){
  .modal1 .modal-wrap {
    width: 90%;
  }
}

/* Fadein from display:none */
@keyframes fade-in {
  0% {
    display: none;
    opacity: 0;
  }
  1% {
    display: flex;
    opacity: 0;
  }
  100% {
    display: flex;
    opacity: 1;
  }
}

@-moz-keyframes fade-in {
  0% {
    display: none;
    opacity: 0;
  }
  1% {
    display: flex;
    opacity: 0;
  }
  100% {
    display: flex;
    opacity: 1;
  }
}

@-webkit-keyframes fade-in {
  0% {
    display: none;
    opacity: 0;
  }
  1% {
    display: flex;
    opacity: 0;
  }
  100% {
    display: flex;
    opacity: 1;
  }
}
</style>
<label id="modal_trigger" for="modal-trigger">Входя, Вы принимаете <strong>Условия использования</strong><br>почтового сервера ФИЦ КНЦ РАН</label>
<div id="footer_powered">
<a style="color:grey;text-align:center;" href="https://www.ksc.ru">&copy;2018 - '. date('Y') .' ФИЦ КНЦ РАН Webmail</a> | <a style="color:grey;" href="https://roundcube.net">Powered by Roundcube</a>
</div>
<div class="modal1">
    <input id="modal-trigger" class="checkbox" type="checkbox">
    <div class="modal-overlay">
        <label for="modal-trigger" class="o-close"></label>
        <div class="modal-wrap">
           <label for="modal-trigger" class="close">&#10006;</label>
<h1 style="text-align: center;">Условия использования</h1>
<p>1. Пользуясь возможностями почтового сервера пользователь автоматически принимает настоящие условия.</p>
<p>2. Данный почтовый сервер служит для предоставления услуг электронной почты исключительно сотрудникам <a href="https://www.ksc.ru">ФИЦ КНЦ РАН</a> и его <a href="https://www.ksc.ru/instituty/">обособленным подразделениям</a>.</p>
<p>3. Использование почтового сервера способом, не имеющим отношения к трудовому процессу, является нарушением положения об использования сети <a href="https://www.ksc.ru">ФИЦ КНЦ РАН</a> и приравнивается к нарушению правил трудовой дисциплины. К нарушениям правил использования сервера в частности относятся отправка или получение информации следующего содержания:</p>
<ul>
    <li>программное обеспечение, нарушающее авторские права или лицензионные соглашения субъектов или физических лиц;</li>
    <li>музыкальные или видеоматериалы, нарушающие авторские права исполнителей;</li>
    <li>материалы порнографического содержания;</li>
    <li>научные работы, статьи или другую информацию, которая может представлять коммерческую тайну, без предварительного согласования с руководством;</li>
    <li>сообщения, оскорбляющие других людей, их национальные или религиозные чувства;</li>
    <li>сообщения политического характера;</li>
    <li>сообщения с угрозами или элементами шантажа;</li>
    <li>информация, связанная с деятельностью террористических либо экстремистских группировок или лиц;</li>
    <li>любая информация, каким-либо образом нарушающая действующее законодательство РФ.</li>
</ul>
<p>4. Категорически запрещается массовая рассылка нежелательных сообщений рекламного или непристойного содержания (спам).</p>
<p>5. В случае нарушения правил пользования почтовым сервером <a href="https://www.ksc.ru">ФИЦ КНЦ РАН</a> пользователь может быть лишен возможности использования данного сервера и предоставляемых им сервисов.</p>
<p>6. Запрещается использование сервера  каким-либо способом, приводящим к технической неисправности или причинению вреда данному серверу, другим сетевым ресурсам сети <a href="https://www.ksc.ru">ФИЦ КНЦ РАН</a> или ресурсам сети Интернет. В случае нанесения пользователем сервера какого-либо ущерба <a href="https://www.ksc.ru">ФИЦ КНЦ РАН</a>, другим организациям или физическим лицам, пользователь несет персональную административную или уголовную ответственность согласно действующему законодательству.</p>
        </div>
    </div>
</div>
';
// used as bottom line below login form (usual text is "webmail")
// set to false if not used
//$rcmail_config['custom_login_bottomline'] = '<a style="color:grey;" href="https://www.ksc.ru">&copy;2019 ФИЦ НКЦ РАН Webmail</a> | <a style="color:grey;" href="https://roundcube.net">Powered by Roundcube</a>';
$rcmail_config['custom_login_bottomline'] = false;

?>
