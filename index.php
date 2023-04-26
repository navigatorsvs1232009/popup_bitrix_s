<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test-popup");
$APPLICATION->ShowTitle(false);
CJSCore::Init(['popup']);
?>

<script>
    // BX.element - элемент, к которому будет привязано окно, если null – окно появится по центру экрана

    BX.ready(function () {
        var popup = BX.PopupWindowManager.create("popup-message", BX('element'), {
            content: 'Узнайте, как снизить ставку',

            zIndex: 100, // z-index
            closeIcon: {
                // объект со стилями для иконки закрытия, при null - иконки не будет
                opacity: 1
            },
			titleBar: 'Нужен кредит или кредитная карта?',
            closeByEsc: true, // закрытие окна по esc
            darkMode: false, // окно будет светлым или темным
            autoHide: true, // закрытие при клике вне окна
            draggable: true, // можно двигать или нет
            resizable: true, // можно ресайзить
            min_height: 100, // минимальная высота окна
            min_width: 100, // минимальная ширина окна
            lightShadow: true, // использовать светлую тень у окна
            angle: true, // появится уголок
            overlay: {
                // объект со стилями фона
                backgroundColor: 'black',
                opacity: 500
            },
            buttons: [
                new BX.PopupWindowButton({
                    text: 'Узнать подробнее', // текст кнопки
                    id: 'save-btn', // идентификатор
                    className: 'hero-slider-item-button highlight button-highlight font-14 b24-web-form-popup-btn-38', // доп. классы
                    events: {
                      click: function() {
window.open('https://www.united.ru/credits/crm/');
                          // Событие при клике на кнопку
                      }
                    }
                })

            ],
            events: {
               onPopupShow: function() {
                  // Событие при показе окна
               },
               onPopupClose: function() {
                  // Событие при закрытии окна
               }
            }
        });

        popup.show();
    });
</script>



<style>

	.popup__container {
height: 78px;
width: 374px;
}

	.popup__bg {
position: absolute;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.5);
z-index: 1;
}


#popup-message {
width: 1170px;
    height: 230px;
    border-radius: 15px;
    background: url(/upload/medialibrary/762/ea0rbpxjtr4h1il48vu57leqxey2iu53/popup-desktop-credit.png);
    background-repeat: round;
}

	@media (max-width: 1190px) {
#popup-message {
width: 690px;
    height: 230px;
    border-radius: 15px;
    background: url(/upload/medialibrary/3cb/6th2m2tth3lais9wq8ozvz7051uplaox/popup-tablet-credit.png);
    background-repeat: round;
}
}


	@media (max-width: 767px) {
#popup-message {
width: 320px;
    height: 410px;
    border-radius: 15px;
    background: url(/upload/medialibrary/21b/vv8foh0pcnyi5ve3l7gj9a8olkkiz7gx/popup-mobile-credit.png);
    background-repeat: round;
}
}

.popup-window-titlebar-text {
		margin-left: 25px;
		margin-top: 25px;

font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 29px;

color: #000000;
white-space: inherit;
	}

	.popup-window-titlebar {
		max-width: 338px;
}

#popup-window-content-popup-message {
background: none;
}

#popup-window-content-popup-message {
    background: none;
    margin-top: 25px;
    margin-left: 17px;
}


	.popup-window-button {
    text-transform: inherit;
color: #000000;
}


.popup-window-buttons {
    width: 180px;
margin-left: 29px;
}
</style>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>