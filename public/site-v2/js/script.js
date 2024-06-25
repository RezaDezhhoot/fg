//  script btn ..........................................................

var falsebtntoggle = document.querySelectorAll(".form-submit-disable");

falsebtntoggle.forEach((falsebtntoggle, index) => {
    falsebtntoggle.addEventListener("submit", function (event) {
        event.preventDefault();
    });
});


var btnAlert = document.querySelectorAll("#btn-close-tp-alert");

btnAlert.forEach((btnAlert, index) => {
    btnAlert.addEventListener("click", function (event) {
        document.body.classList.remove("alert-tp");
        console.log("hi");
    });
});

//  script btn ..........................................................

var box_page_create_ticket = document.querySelectorAll(".box-page-create-ticket");
var  btn_next_page_create_ticket = document.querySelectorAll(".btn-next-page-create-ticket");

btn_next_page_create_ticket.forEach((btn_next_page_create_ticket,index) => {
    btn_next_page_create_ticket.addEventListener('click', function handleClick(event) {
        box_page_create_ticket.forEach(item => {
            item.classList.add('hidden');
        });

        box_page_create_ticket[index + 1].classList.remove('hidden');
    });
});



//  script btn ..........................................................

var togglebtns = document.querySelectorAll(".toggle-btn");
var truebtntoggle = document.querySelectorAll(".true-btn-toggle");
var falsebtntoggle = document.querySelectorAll(".false-btn-toggle");

togglebtns.forEach((togglebtn, index) => {
    togglebtn.addEventListener("click", function handleClick(event) {
        truebtntoggle[index].classList.toggle("hide-item");
        falsebtntoggle[index].classList.toggle("hide-item");
    });
});

const radioButtons = document.querySelectorAll('input[type="radio"]');

radioButtons.forEach((button) => {
    button.addEventListener("change", () => {
        radioButtons.forEach((button) => {
            button.parentElement.classList.remove("active");
        });
        button.parentElement.classList.add("active");
    });
});

const decrementBtn = document.querySelectorAll(".decrement");
const incrementBtn = document.querySelectorAll(".increment");
const inputNumber = document.querySelectorAll(".input-number");
const itemcart = document.querySelectorAll(".item-cart");

if (decrementBtn != undefined) {
    decrementBtn.forEach((decrementBtn, index) => {
        decrementBtn.addEventListener("click", () => {
            const currentValue = parseInt(inputNumber[index].value);
            inputNumber[index].value = currentValue - 1;
            inputNumber[index].dispatchEvent(new Event("input"));
        });
    });

    incrementBtn.forEach((incrementBtn, index) => {
        incrementBtn.addEventListener("click", () => {
            const currentValue = parseInt(inputNumber[index].value);
            inputNumber[index].value = currentValue + 1;
            inputNumber[index].dispatchEvent(new Event("input"));
        });
    });
}

//  script range ......................................................

var mainpagesearch = document.getElementById("main-page-search");

// if (mainpagesearch != undefined) {
//     const rangeInput2 = document.querySelectorAll(".range-input2 input"),
//         priceInput2 = document.querySelectorAll(".price-input2 h2"),
//         range2 = document.querySelector(".slider2 .progress2");
//     let priceGap2 = 1000;
//     range2.style.right = 0;
//     range2.style.left = 0;
//     priceInput2.forEach((input) => {
//         input.addEventListener("input", (e) => {
//             let minPrice = parseInt(priceInput2[0].innerHTML),
//                 maxPrice = parseInt(priceInput2[1].innerHTML);

//             if (
//                 maxPrice - minPrice >= priceGap2 &&
//                 maxPrice <= rangeInput2[1].max
//             ) {
//                 if (e.target.className === "input-min2") {
//                     rangeInput2[0].value = minPrice;
//                     range2.style.left =
//                         (minPrice / rangeInput2[0].max) * 100 + "%";
//                 } else {
//                     rangeInput2[1].value = maxPrice;
//                     range2.style.right =
//                         100 - (maxPrice / rangeInput2[1].max) * 100 + "%";
//                 }
//             }
//         });
//     });
//     rangeInput2.forEach((input) => {
//         input.addEventListener("input", (e) => {
//             let minVal = parseInt(rangeInput2[0].value),
//                 maxVal = parseInt(rangeInput2[1].value);
//             if (maxVal - minVal < priceGap2) {
//                 if (e.target.className === "range-min2") {
//                     rangeInput2[0].value = maxVal - priceGap2;
//                 } else {
//                     rangeInput2[1].value = minVal + priceGap2;
//                 }
//             } else {
//                 priceInput2[0].innerHTML = minVal;
//                 priceInput2[1].innerHTML = maxVal;
//                 range2.style.left = (minVal / rangeInput2[0].max) * 100 + "%";
//                 range2.style.right =
//                     100 - (maxVal / rangeInput2[1].max) * 100 + "%";
//             }
//         });
//     });

//     const rangeInput = document.querySelectorAll(".range-input input"),
//         priceInput = document.querySelectorAll(".price-input h2"),
//         range = document.querySelector(".slider .progress");
//     let priceGap = 1000;
//     range.style.right = 0;
//     range.style.left = 0;
//     priceInput.forEach((input) => {
//         input.addEventListener("input", (e) => {
//             let minPrice = parseInt(priceInput[0].innerHTML),
//                 maxPrice = parseInt(priceInput[1].innerHTML);

//             if (
//                 maxPrice - minPrice >= priceGap &&
//                 maxPrice <= rangeInput[1].max
//             ) {
//                 if (e.target.className === "input-min") {
//                     rangeInput[0].value = minPrice;
//                     range.style.left =
//                         (minPrice / rangeInput[0].max) * 100 + "%";
//                 } else {
//                     rangeInput[1].value = maxPrice;
//                     range.style.right =
//                         100 - (maxPrice / rangeInput[1].max) * 100 + "%";
//                 }
//             }
//         });
//     });
//     rangeInput.forEach((input) => {
//         input.addEventListener("input", (e) => {
//             let minVal = parseInt(rangeInput[0].value),
//                 maxVal = parseInt(rangeInput[1].value);
//             if (maxVal - minVal < priceGap) {
//                 if (e.target.className === "range-min") {
//                     rangeInput[0].value = maxVal - priceGap;
//                 } else {
//                     rangeInput[1].value = minVal + priceGap;
//                 }
//             } else {
//                 priceInput[0].innerHTML = minVal;
//                 priceInput[1].innerHTML = maxVal;
//                 range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
//                 range.style.right =
//                     100 - (maxVal / rangeInput[1].max) * 100 + "%";
//             }
//         });
//     });
// }

//  open box notif ......................................................

var iconnotif = document.getElementById("icon-notif");
var boxnotif = document.getElementById("box-show-notif");
var boxnotifclo = document.getElementById("box-notif-clothe");
var boxnotifclo = document.getElementById("box-notif-clothe");
var txtmessagenotifone = document.getElementById("header-one-notif");
var txtmessagenotiftwo = document.getElementById("header-two-notif");
var txtmessagenotifthree = document.getElementById("header-three-notif");
var txtmessagenotiffour = document.getElementById("header-four-notif");
var boxnotifmobile = document.getElementById("box-notif-mobile");
var messagenotifpersonal = document.getElementById("message-notif-personal");
var messagenotifgeneral = document.getElementById("message-notif-general");
var messagenotifpersonalM = document.getElementById(
    "message-notif-personal-mobile"
);
var messagenotifgeneralM = document.getElementById(
    "message-notif-general-mobile"
);

var openmenu = document.querySelectorAll(".open-menu");

openmenu.forEach((openmenu) => {
    openmenu.addEventListener("mouseover", function handleClick(event) {
        boxnotif.classList.remove("hide-item");
        iconnotif.classList.add("nav-right-icon-active");
    });
});

var overmenu = document.querySelectorAll(".over-menu");

overmenu.forEach((overmenu) => {
    overmenu.addEventListener("mouseover", function handleClick(event) {
        boxnotifclo.classList.remove("hide-item");
    });
});

var exitmenu = document.querySelectorAll(".exit-menu");

exitmenu.forEach((exitmenu) => {
    exitmenu.addEventListener("mouseover", function handleClick(event) {
        boxnotifclo.classList.add("hide-item");
        boxnotif.classList.add("hide-item");
        iconnotif.classList.remove("nav-right-icon-active");
    });
});

var clothemenu = document.querySelectorAll(".clothe-menu");

clothemenu.forEach((clothemenu) => {
    clothemenu.addEventListener("click", function handleClick(event) {
        boxnotifclo.classList.add("hide-item");
        boxnotif.classList.add("hide-item");
        iconnotif.classList.remove("nav-right-icon-active");
    });
});

var personal = document.querySelectorAll(".personal");

personal.forEach((personal) => {
    personal.addEventListener("click", function handleClick(event) {
        txtmessagenotifone.classList.add("item-notif-active");
        txtmessagenotiftwo.classList.remove("item-notif-active");
        messagenotifpersonal.classList.remove("hide-item");
        messagenotifgeneral.classList.add("hide-item");
    });
});

var general = document.querySelectorAll(".general");

general.forEach((general) => {
    general.addEventListener("click", function handleClick(event) {
        txtmessagenotifone.classList.remove("item-notif-active");
        txtmessagenotiftwo.classList.add("item-notif-active");
        messagenotifpersonal.classList.add("hide-item");
        messagenotifgeneral.classList.remove("hide-item");
    });
});

var personalM = document.querySelectorAll(".personal-mobile");

personalM.forEach((personalM) => {
    personalM.addEventListener("click", function handleClick(event) {
        txtmessagenotifthree.classList.add("item-notif-active");
        txtmessagenotiffour.classList.remove("item-notif-active");
        messagenotifpersonalM.classList.remove("hide-item");
        messagenotifgeneralM.classList.add("hide-item");
    });
});

var generalM = document.querySelectorAll(".general-mobile");

generalM.forEach((generalM) => {
    generalM.addEventListener("click", function handleClick(event) {
        txtmessagenotifthree.classList.remove("item-notif-active");
        txtmessagenotiffour.classList.add("item-notif-active");
        messagenotifpersonalM.classList.add("hide-item");
        messagenotifgeneralM.classList.remove("hide-item");
    });
});

var clothemenuM = document.querySelectorAll(".clothe-menu-mobile");

clothemenuM.forEach((clothemenuM) => {
    clothemenuM.addEventListener("click", function handleClick(event) {
        boxnotifmobile.classList.toggle("hide-item");
    });
});

//  slider gift carts script .....................................................................

var boxgiftcarts = document.querySelectorAll(".box-gift-carts");
var itemmessagegiftcarts = document.querySelectorAll(
    ".item-message-gift-carts"
);

boxgiftcarts.forEach((boxgiftcart, index) => {
    boxgiftcart.addEventListener("click", function handleClick(event) {
        var numbergiftcarts = [0, 1, 2, 3, 4, 5];
        for (x = 0; x < numbergiftcarts.length; x++) {
            boxgiftcarts[x].classList.remove("gift-box-active-" + x);
            itemmessagegiftcarts[x].classList.add("hide-item");
            imggiftbox[x].classList.remove("hide-item2");
            imgselectgiftbox[x].classList.remove("show-item");
            imghovergiftbox[x].classList.remove("hide-item2");
        }
        boxgiftcart.classList.add("gift-box-active-" + index);
        itemmessagegiftcarts[index].classList.remove("hide-item");

        imggiftbox[index].classList.add("hide-item2");
        imgselectgiftbox[index].classList.add("show-item");
        imghovergiftbox[index].classList.add("hide-item2");
    });
});

var imggiftbox = document.querySelectorAll(".img-gift-box");
var imgselectgiftbox = document.querySelectorAll(".img-select-gift-box");
var imghovergiftbox = document.querySelectorAll(".img-hover-gift-box");

boxgiftcarts.forEach((boxgiftcart, index) => {
    boxgiftcart.addEventListener("mouseover", function handleClick(event) {
        var numbergiftcarts = [0, 1, 2, 3, 4, 5];
        for (x = 0; x < numbergiftcarts.length; x++) {
            imgselectgiftbox[x].classList.add("hide-item");
            imghovergiftbox[x].classList.add("hide-item");
        }

        imggiftbox[index].classList.add("hide-item");
        imgselectgiftbox[index].classList.add("hide-item");
        imghovergiftbox[index].classList.remove("hide-item");
    });
});

boxgiftcarts.forEach((boxgiftcart, index) => {
    boxgiftcart.addEventListener("mouseover", function handleClick(event) {
        var numbergiftcarts = [0, 1, 2, 3, 4, 5];
        for (x = 0; x < numbergiftcarts.length; x++) {
            imgselectgiftbox[x].classList.add("hide-item");
            imghovergiftbox[x].classList.add("hide-item");
        }

        imggiftbox[index].classList.add("hide-item");
        imgselectgiftbox[index].classList.add("hide-item");
        imghovergiftbox[index].classList.remove("hide-item");
    });
});

boxgiftcarts.forEach((boxgiftcart, index) => {
    boxgiftcart.addEventListener("mouseout", function handleClick(event) {
        var numbergiftcarts = [0, 1, 2, 3, 4, 5];
        for (x = 0; x < numbergiftcarts.length; x++) {
            imgselectgiftbox[x].classList.add("hide-item");
            imghovergiftbox[x].classList.add("hide-item");
        }

        imggiftbox[index].classList.remove("hide-item");
        imgselectgiftbox[index].classList.remove("hide-item");
        imghovergiftbox[index].classList.add("hide-item");
    });
});

//  hover menu .....................................................................

var menu1 = document.getElementById("menu1");
var menu1request = document.getElementById("menu1-request");

var navMenuItem = document.querySelectorAll(".nav-menu-item");

navMenuItem.forEach((navMenuItem, index) => {
    navMenuItem.addEventListener("mouseover", function handleClick(event) {});
});

if (menu1 != undefined) {
    menu1.addEventListener("mouseover", function handleClick(event) {
        boxheverstore.classList.remove("hide-item");
    });
}

if (menu1request != undefined) {
    menu1request.addEventListener("mouseover", function handleClick(event) {
        boxheverstore.classList.remove("hide-item");
    });
}

//  toggle menu store ................................................................

var boxheverstore = document.getElementById("box-hever-store");
var clotheboxhoverstore = document.getElementById("clothe-box-hover-store");
var showboxheverstore = document.getElementById("show-box-hever-store");

var clothemenustore = document.querySelectorAll(".clothe-menu-store");

clothemenustore.forEach((clothemenustore) => {
    clothemenustore.addEventListener("mouseover", function handleClick(event) {
        clotheboxhoverstore.classList.add("hide-item");
        boxheverstore.classList.add("hide-item");
    });
});

var openmenustore = document.querySelectorAll(".open-menu-store");

openmenustore.forEach((openmenustore) => {
    openmenustore.addEventListener("mouseover", function handleClick(event) {
        clotheboxhoverstore.classList.remove("hide-item");
    });
});

var itemboxheverstores = document.querySelectorAll(".header-box-hever-store");
var boxmessageboxheverstore = document.getElementsByClassName(
    "box-message-box-hever-store"
);

itemboxheverstores.forEach((itemboxheverstore, index) => {
    itemboxheverstore.addEventListener(
        "mouseover",
        function handleClick(event) {
            for (x = 0; x < boxmessageboxheverstore.length; x++) {
                itemboxheverstores[x].classList.remove("active-menu-sotre");
                boxmessageboxheverstore[x].classList.add("hide-item");
            }
            this.classList.add("active-menu-sotre");
            boxmessageboxheverstore[index].classList.remove("hide-item");
        }
    );
});

//  toggle menu mobile ................................................................

var sidebarpc = document.getElementById("sidebar-pc");
var sidebardashboard = document.getElementById("sidebar-dashboard");
var sidebardashboard = document.getElementsByClassName("sidebar-dashboard");
var boxclothemenumobile = document.getElementById("box-clothe-menu-mobile");
var boxclothemedashboard = document.getElementById("box-clothe-menu-dashboard");
var iconforniteheaderstore = document.getElementById(
    "icon-fornite-header-store"
);
var icongamingheaderstore = document.getElementById("icon-gaming-header-store");
var sizeWidth = document.body.offsetWidth;

var openmenuM = document.querySelectorAll(".open-menu-mobile");

openmenuM.forEach((openmenuM) => {
    openmenuM.addEventListener("click", function handleClick(event) {
        if (sidebarpc != undefined) {
            sidebarpc.classList.toggle("show-sidebar-mobile");
        }

        if (sidebardashboard[0] != undefined) {
            sidebardashboard[0].classList.toggle("show-sidebar-mobile");
        }

        if (boxclothemenumobile != undefined) {
            boxclothemenumobile.classList.toggle("hide-item");
        }

        if (boxclothemedashboard != undefined) {
            boxclothemedashboard.classList.toggle("hide-item");
        }
    });
});

var messagecategorystoremobile = document.getElementsByClassName(
    "message-category-store-mobile"
);
var iconforniteheaderstore = document.getElementsByClassName(
    "icon-category-header-store"
);
var openboxfortnite = document.querySelectorAll(".open-box-category");

openboxfortnite.forEach((openboxfortnite, index) => {
    openboxfortnite.addEventListener("click", function handleClick(event) {
        messagecategorystoremobile[index].classList.toggle("hide-item");
        iconforniteheaderstore[index].classList.toggle("rotate-header-icon");
    });
});

//  script dashboard page   ..............................................................

var hovermenudashboard = document.querySelectorAll(".hover-menu-dashboard");
var imgdefaultmenudashboard = document.querySelectorAll(
    ".img-default-menu-dashboard"
);
var imghovermenudashboard = document.querySelectorAll(
    ".img-hover-menu-dashboard"
);

var itemmessagedashcomments = document.querySelectorAll(
    ".item-message-dash-comments"
);
var itemheaderdashcomments = document.querySelectorAll(
    ".item-header-dash-comments"
);

itemheaderdashcomments.forEach((itemheaderdashcomment, index) => {
    itemheaderdashcomment.addEventListener(
        "click",
        function handleClick(event) {
            for (var x = 0; x < itemheaderdashcomments.length; x++) {
                itemheaderdashcomments[x].classList.remove(
                    "header-dash-comments-active"
                );
                itemmessagedashcomments[x].classList.add("hide-item");
            }

            itemheaderdashcomments[index].classList.add(
                "header-dash-comments-active"
            );
            itemmessagedashcomments[index].classList.remove("hide-item");
        }
    );
});

var boxstardashboard = document.querySelectorAll(".box-star-dashboard");
var starfilldashboards = document.querySelectorAll(".star-fill-dashboard");
var starwhitedashboards = document.querySelectorAll(".star-white-dashboard");

if (boxstardashboard[0] != undefined) {
    boxstardashboard[0].addEventListener("click", function handleClick(event) {
        starwhitedashboards[0].classList.add("hide-item");
        starfilldashboards[0].classList.remove("hide-item");

        starwhitedashboards[1].classList.remove("hide-item");
        starfilldashboards[1].classList.add("hide-item");

        starwhitedashboards[2].classList.remove("hide-item");
        starfilldashboards[2].classList.add("hide-item");

        starwhitedashboards[3].classList.remove("hide-item");
        starfilldashboards[3].classList.add("hide-item");

        starwhitedashboards[4].classList.remove("hide-item");
        starfilldashboards[4].classList.add("hide-item");
    });

    boxstardashboard[1].addEventListener("click", function handleClick(event) {
        starwhitedashboards[0].classList.add("hide-item");
        starfilldashboards[0].classList.remove("hide-item");

        starwhitedashboards[1].classList.add("hide-item");
        starfilldashboards[1].classList.remove("hide-item");

        starwhitedashboards[2].classList.remove("hide-item");
        starfilldashboards[2].classList.add("hide-item");

        starwhitedashboards[3].classList.remove("hide-item");
        starfilldashboards[3].classList.add("hide-item");

        starwhitedashboards[4].classList.remove("hide-item");
        starfilldashboards[4].classList.add("hide-item");
    });

    boxstardashboard[2].addEventListener("click", function handleClick(event) {
        starwhitedashboards[0].classList.add("hide-item");
        starfilldashboards[0].classList.remove("hide-item");

        starwhitedashboards[1].classList.add("hide-item");
        starfilldashboards[1].classList.remove("hide-item");

        starwhitedashboards[2].classList.add("hide-item");
        starfilldashboards[2].classList.remove("hide-item");

        starwhitedashboards[3].classList.remove("hide-item");
        starfilldashboards[3].classList.add("hide-item");

        starwhitedashboards[4].classList.remove("hide-item");
        starfilldashboards[4].classList.add("hide-item");
    });

    boxstardashboard[3].addEventListener("click", function handleClick(event) {
        starwhitedashboards[0].classList.add("hide-item");
        starfilldashboards[0].classList.remove("hide-item");

        starwhitedashboards[1].classList.add("hide-item");
        starfilldashboards[1].classList.remove("hide-item");

        starwhitedashboards[2].classList.add("hide-item");
        starfilldashboards[2].classList.remove("hide-item");

        starwhitedashboards[3].classList.add("hide-item");
        starfilldashboards[3].classList.remove("hide-item");

        starwhitedashboards[4].classList.remove("hide-item");
        starfilldashboards[4].classList.add("hide-item");
    });

    boxstardashboard[4].addEventListener("click", function handleClick(event) {
        starwhitedashboards[0].classList.add("hide-item");
        starfilldashboards[0].classList.remove("hide-item");

        starwhitedashboards[1].classList.add("hide-item");
        starfilldashboards[1].classList.remove("hide-item");

        starwhitedashboards[2].classList.add("hide-item");
        starfilldashboards[2].classList.remove("hide-item");

        starwhitedashboards[3].classList.add("hide-item");
        starfilldashboards[3].classList.remove("hide-item");

        starwhitedashboards[4].classList.add("hide-item");
        starfilldashboards[4].classList.remove("hide-item");
    });
}

var headerboxnotifdashnotif = document.querySelectorAll(
    ".header-box-notif-dash-notif"
);
var boxmessagenotifdashnotif = document.querySelectorAll(
    ".box-message-notif-dash-notif"
);
var arrowboxnotifheaderdashnotif = document.querySelectorAll(
    ".arrow-box-notif-header-dash-notif"
);

headerboxnotifdashnotif.forEach((headerboxnotifdashnotif, index) => {
    headerboxnotifdashnotif.addEventListener(
        "click",
        function handleClick(event) {
            boxmessagenotifdashnotif[index].classList.toggle("hide-item");
            arrowboxnotifheaderdashnotif[index].classList.toggle(
                "arrow-box-notif-active"
            );
        }
    );
});

//  script request page   ..............................................................

var formrequest = document.getElementById("form-request");

if (formrequest != undefined) {
    (function () {
        document
            .getElementById("form-request")
            .addEventListener("submit", calTotal);

        function calTotal(event) {
            event.preventDefault();
        }
    })();
}

//  script product sale add page   ..............................................................

var boxSafeTransaction = document.querySelectorAll(".box-safe-transaction");
var btnOpenSafeTransaction = document.querySelectorAll(".btn-open-safe-transaction");
var btnCloseSafeTransaction = document.querySelectorAll(".btn-close-safe-transaction");
var boxContactSaleaAd = document.querySelectorAll(".box-contact-sale-ad");
var btnOpenContactSale = document.querySelectorAll(".btn-open-contact-sale");

if (boxSafeTransaction != undefined) {
    btnOpenSafeTransaction.forEach((btnOpenSafeTransaction,index) => {
        btnOpenSafeTransaction.addEventListener("click",function handleClick(event) {
            boxSafeTransaction[index].classList.remove("hide-item");
        });
    });

    btnCloseSafeTransaction.forEach((btnCloseSafeTransaction,index) => {
        btnCloseSafeTransaction.addEventListener("click",function handleClick(event) {
            boxSafeTransaction[index].classList.add("hide-item");
        });
    });

    btnOpenContactSale.forEach((btnOpenContactSale,index) => {
        btnOpenContactSale.addEventListener("click",function handleClick(event) {
            boxContactSaleaAd[index].classList.remove("hide-item");
            btnOpenContactSale.classList.add("hide-item");
        });
    });
}

//  script search page   ..............................................................

var mainpagesearch = document.getElementById("main-page-search");

if (mainpagesearch != undefined) {
    function updateTrack(minInput, maxInput, track, minValue, maxValue) {
        const minVal = parseInt(minInput.value);
        const maxVal = parseInt(maxInput.value);
        if (minVal > maxVal) {
            const temp = minVal;
            minInput.value = maxVal;
            maxInput.value = temp;
        }
        const minPercent = (minInput.value / minInput.max) * 100;
        const maxPercent = (maxInput.value / maxInput.max) * 100;
        track.style.left = `${minPercent}%`;
        track.style.right = `${100 - maxPercent}%`;
        minValue.textContent = `$${minInput.value}`;
        maxValue.textContent = `$${maxInput.value}`;
    }

    // Initialize the first range slider
    const rangeMin1 = document.getElementById('rangeMin1');
    const rangeMax1 = document.getElementById('rangeMax1');
    const rangeTrack1 = document.getElementById('rangeTrack1');
    const rangeMinValue1 = document.getElementById('rangeMinValue1');
    const rangeMaxValue1 = document.getElementById('rangeMaxValue1');

    rangeMin1.addEventListener('input', function() {
        updateTrack(rangeMin1, rangeMax1, rangeTrack1, rangeMinValue1, rangeMaxValue1);
    });
    rangeMax1.addEventListener('input', function() {
        updateTrack(rangeMin1, rangeMax1, rangeTrack1, rangeMinValue1, rangeMaxValue1);
    });

    // Initialize track for the first range slider
    updateTrack(rangeMin1, rangeMax1, rangeTrack1, rangeMinValue1, rangeMaxValue1);

    // Initialize the second range slider
    const rangeMin2 = document.getElementById('rangeMin2');
    const rangeMax2 = document.getElementById('rangeMax2');
    const rangeTrack2 = document.getElementById('rangeTrack2');
    const rangeMinValue2 = document.getElementById('rangeMinValue2');
    const rangeMaxValue2 = document.getElementById('rangeMaxValue2');

    rangeMin2.addEventListener('input', function() {
        updateTrack(rangeMin2, rangeMax2, rangeTrack2, rangeMinValue2, rangeMaxValue2);
    });
    rangeMax2.addEventListener('input', function() {
        updateTrack(rangeMin2, rangeMax2, rangeTrack2, rangeMinValue2, rangeMaxValue2);
    });

    // Initialize track for the second range slider
    updateTrack(rangeMin2, rangeMax2, rangeTrack2, rangeMinValue2, rangeMaxValue2);
}

//  script product page   ...........................................................

if (document.getElementById("btn-detalist-prudect-page") != undefined) {
    window.addEventListener("scroll", function () {
        var userposition = Math.floor(this.scrollY);
        var DetalistPrudectPage  = document.getElementById("detalist-prudect-page").getBoundingClientRect().top - 100;
        var CommentsPrudectPage  = document.getElementById("comments-prudect-page").getBoundingClientRect().top - 100;
        var QuestionPrudectPage  = document.getElementById("question-prudect-page").getBoundingClientRect().top - 100;

        if (DetalistPrudectPage < 0 ) {
            document
                .getElementById("btn-detalist-prudect-page")
                .classList.add("menu-message-detalist-product-active");
            document
                .getElementById("btn-comments-prudect-page")
                .classList.remove("menu-message-detalist-product-active");
            document
                .getElementById("btn-question-prudect-page")
                .classList.remove("menu-message-detalist-product-active");
        }

        if (CommentsPrudectPage < 0 && DetalistPrudectPage < 0 ) {
            document
                .getElementById("btn-detalist-prudect-page")
                .classList.remove("menu-message-detalist-product-active");
            document
                .getElementById("btn-comments-prudect-page")
                .classList.add("menu-message-detalist-product-active");
            document
                .getElementById("btn-question-prudect-page")
                .classList.remove("menu-message-detalist-product-active");
        }

        if (QuestionPrudectPage < 0  && DetalistPrudectPage < 0  && CommentsPrudectPage < 0) {
            document
                .getElementById("btn-detalist-prudect-page")
                .classList.remove("menu-message-detalist-product-active");
            document
                .getElementById("btn-comments-prudect-page")
                .classList.remove("menu-message-detalist-product-active");
            document
                .getElementById("btn-question-prudect-page")
                .classList.add("menu-message-detalist-product-active");
        }
    });
}

//  script faqs page   ..............................................................

var formfaqs = document.getElementById("form-faqs");

if (formfaqs != undefined) {
    (function () {
        document
            .getElementById("form-faqs")
            .addEventListener("submit", calTotal);

        function calTotal(event) {
            const numberorderfaqs =
                document.getElementById("number-order-faqs").value;
            const numberphonefaqs =
                document.getElementById("number-phone-faqs").value;
            const errorenumberprudectfaqs = document.getElementById(
                "errore-number-prudect-faqs"
            );
            const errorenumberfaqs =
                document.getElementById("errore-number-faqs");

            if (numberphonefaqs === "" || numberphonefaqs.length != 11) {
                event.preventDefault();
                errorenumberfaqs.classList.remove("hide-item");
                if (numberorderfaqs === "") {
                    errorenumberprudectfaqs.classList.remove("hide-item");
                    event.preventDefault();
                } else {
                    errorenumberprudectfaqs.classList.add("hide-item");
                }
            } else {
                if (numberorderfaqs === "") {
                    errorenumberprudectfaqs.classList.remove("hide-item");
                    event.preventDefault();
                } else {
                    errorenumberprudectfaqs.classList.add("hide-item");
                }
                event.preventDefault();
            }
        }
    })();
}

//   script select box  .......................................................

var headerselectbox = document.querySelectorAll(".header-select-box");
var itemmoreselectbox = document.querySelectorAll(".item-more-select-box");
var textitemmoreselectbox = document.getElementsByClassName(
    "text-item-more-select-box"
);
var textheaderselectbox = document.getElementById("text-header-select-box");
var iconselectbox = document.querySelectorAll(".icon-select-box");
var moreselectbox = document.querySelectorAll(".more-select-box");

if (textheaderselectbox != undefined) {
    textheaderselectbox.innerHTML = textitemmoreselectbox[0].innerHTML;
    headerselectbox.forEach((headerselectbox, index) => {
        headerselectbox.addEventListener("click", function handleClick(event) {
            iconselectbox[index].classList.toggle("icon-open");
            moreselectbox[index].classList.toggle("hide-item");
            this.classList.toggle("header-select-box-open");
        });

        itemmoreselectbox.forEach((itemmoreselectbox, index2) => {
            itemmoreselectbox.addEventListener(
                "click",
                function handleClick(event) {
                    iconselectbox[index].classList.toggle("icon-open");
                    moreselectbox[index].classList.toggle("hide-item");
                    headerselectbox.classList.toggle("header-select-box-open");
                    textheaderselectbox.innerHTML =
                        textitemmoreselectbox[index2].innerHTML;
                }
            );
        });
    });
}

//   script ruels page  .......................................................

var counterrulesitemnumber = document.getElementsByClassName(
    "counter-rules-item-number"
);

if (counterrulesitemnumber != undefined) {
    for (var x = 0; x < counterrulesitemnumber.length; x++) {
        counterrulesitemnumber[x].innerHTML = x + 1;
    }
}

//  page cart script .....................................................................

// if (document.getElementById("time-time-detalist-pay")) {
//     const countDownDate = new Date().getTime() + 8 * 60 * 60 * 1000;

//     const timedetalistcart = setInterval(function () {
//         const now = new Date().getTime();

//         const distance = countDownDate - now;

//         const hours = Math.floor(distance / (1000 * 60 * 60));
//         const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//         const seconds = Math.floor((distance % (1000 * 60)) / 1000);

//         document.getElementById("time-time-detalist-pay").innerHTML =
//             hours + ":" + minutes + ":" + seconds;

//         if (distance < 0) {
//             clearInterval(x);
//         }
//     }, 1000);

//     var copytextclipboard = document.querySelectorAll(".copy-text-clipboard");
//     var itemtextclipboard = document.querySelectorAll(".item-text-clipboard");

//     copytextclipboard.forEach((copytextclipboard, index) => {
//         copytextclipboard.addEventListener(
//             "click",
//             function handleClick(event) {
//                 navigator.clipboard.writeText(
//                     itemtextclipboard[index].innerHTML
//                 );
//                 var x = document.getElementById("toast-copy");
//                 var timetoastcopy = document.getElementById("time-toast-copy");
//                 x.className = "show";
//                 timetoastcopy.className = "time-toast-copy";
//                 setTimeout(function () {
//                     x.className = x.className.replace("show", "");
//                 }, 5000);
//                 setTimeout(function () {
//                     timetoastcopy.className = timetoastcopy.className.replace(
//                         "time-toast-copy",
//                         ""
//                     );
//                 }, 5000);
//             }
//         );
//     });
// }

//   script faqs page  .......................................................

var toggleboxacaredonfaq = document.getElementsByClassName(
    "toggle-box-acaredon-faq"
);
var boxacaredonfaqmassage = document.getElementsByClassName(
    "box-acaredon-faq-massage"
);

for (var xy = 0; xy < toggleboxacaredonfaq.length; xy++) {
    toggleboxacaredonfaq[xy].addEventListener("click", function handleClick() {
        this.nextElementSibling.classList.toggle("hide-acardeon");
        this.classList.toggle("open-box-faq-massage");
    });
}

//  sliders script   ................................................................

var mySwiper_img_prudect_more = new Swiper(".mySwiper-img-prudect-more", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    grabCursor: true,
});
var swiper02 = new Swiper(".mySwiper-img-prudect", {
    spaceBetween: 10,
    slidesPerView: 1,
    grabCursor: true,
    thumbs: {
        swiper: mySwiper_img_prudect_more,
    },
});

var swiper = new Swiper(".mySwiper-main-home", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 20,
    centeredSlides: true,
    grabCursor: true,
    speed: 1100,
    autoplay: {
        delay: 8000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".slider-main-prudect", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 20,
    grabCursor: true,
    speed: 500,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination-prudect",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-prudect",
        prevEl: ".swiper-button-prev-prudect",
    },
    breakpoints: {
        320: {
            slidesPerView: 2,
        },
        750: {
            slidesPerView: 3,
        },
        1300: {
            slidesPerView: 4,
        },
        1450: {
            slidesPerView: 5,
        },
    },
});

var swiper = new Swiper(".mySwiper-comment-home", {
    loop: true,
    slidesPerView: 5,
    spaceBetween: 20,
    grabCursor: true,
    speed: 700,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination-comment",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-comment",
        prevEl: ".swiper-button-prev-comment",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        650: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
        1300: {
            slidesPerView: 4,
        },
    },
});

var swiper = new Swiper(".mySwiper-main-gift-carts", {
    loop: false,
    slidesPerView: 6,
    spaceBetween: 25,
    grabCursor: true,
    breakpoints: {
        1: {
            slidesPerView: "auto",
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 6,
        },
    },
});

var swiper = new Swiper(".mySwiper-main-best-sellers", {
    loop: false,
    slidesPerView: 3,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination-best-sellers",
        clickable: true,
    },
    breakpoints: {
        1: {
            slidesPerView: "auto",
            spaceBetween: 30,
        },
        1350: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".mySwiper-page-articles", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    centeredSlides: true,
    grabCursor: true,
    speed: 1000,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination-page-articles",
    },
    navigation: {
        nextEl: ".swiper-button-next-page-articles",
        prevEl: ".swiper-button-prev-page-articles",
    },
});

var swiper = new Swiper(".mySwiper-page-request", {
    direction: "vertical",
    loop: true,
    slidesPerView: 3,
    spaceBetween: 40,
    speed: 1500,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
});

var swiper = new Swiper(".mySwiper-header-product", {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination-page-prudect",
        clickable: true,
    },
});
