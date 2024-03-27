// document.addEventListener('DOMContentLoaded', function () {
//
//     // catalog list filters
//     catalogFilters();
//
//     // catalog detail feedback form
//     feedCatalogForm();
//
// });
//
// function catalogFilters() {
//
//     // common init
//     const deskForm = document.querySelector('.catalog-hero__activity');
//     const mobForm = document.querySelector('.popup-filters');
//     const deskSelects = document.querySelectorAll('.catalog-hero__activity .select__select');
//     const deskCheckBox = document.querySelector('.catalog-check-desktop');
//
//
//     // submit changes of filter selects
//     if (deskSelects) {
//         const config = { attributes: true };
//         let deskSelectData = {};
//
//         const selectsDeskMut = function (mutationList, observer) {
//             mutationList.forEach(mutation => {
//                 if (mutation.attributeName == 'data-select2-id') {
//
//                     const filterName = mutation.target.getAttribute('name');
//                     const filterValue = GetActiveSelectVal(mutation.target);
//
//                     if (!deskSelectData.hasOwnProperty(filterName)) { // if not init
//                         deskSelectData[filterName] = filterValue;
//
//                     } else if (filterValue && deskSelectData[filterName] != filterValue) { // if new valid value
//
//                         deskSelectData[filterName] = filterValue;
//                         observer.disconnect();
//                         if (filterName == 'Sort') { // if select is 'sort', then set up cookie
//                             let data = {};
//                             data[filterName] = deskSelectData[filterName];
//                             const xhr = new XMLHttpRequest();
//                             xhr.open('POST', '/local/templates/main/include/ajax/catalog/cookie_sort.php', false);
//                             xhr.setRequestHeader('Content-Type', 'application/json');
//                             xhr.send(JSON.stringify(data));
//                             deskForm.submit();
//                         } else {
//                             deskForm.submit();
//                         }
//                     }
//                 }
//             });
//         }
//
//         function GetActiveSelectVal(target) {
//             const options = target.querySelectorAll('option');
//             for (const option of options) {
//                 if (option.hasAttribute('data-select2-id')) {
//                     return option.value;
//                 }
//             }
//             return '';
//         }
//
//
//
//         deskSelects.forEach(select => {
//             const observer = new MutationObserver(selectsDeskMut);
//             observer.observe(select, config);
//         })
//     }
//
//     // submit changes of checkbox top (desktop)
//     const checkBoxLabel = document.querySelector('[js_top_checklabel_desc]');
//     if (checkBoxLabel) {
//         checkBoxLabel.addEventListener('click', () => {
//             if (deskCheckBox.checked) {
//                 deskCheckBox.checked = false;
//             } else {
//                 deskCheckBox.checked = true;
//             }
//             deskForm.submit();
//         })
//     }
//
//
//     // reset buttons (desktop, mobile)
//     const resetButtons = document.querySelectorAll('.catalog-hero__reset-text')
//     if (resetButtons) {
//         resetButtons.forEach(resetButton => {
//             resetButton.addEventListener('click', () => {
//                 deskSelects.forEach(select => {
//                     select.selectedIndex = -1;
//                 });
//                 deskCheckBox.removeAttribute('checked');
//                 deskForm.submit(); // send only one of them
//             })
//         })
//     }
//
//
//     // submit button (mobile)
//     const mobSubmitBut = document.querySelector('.popup-filters__bot-btn');
//     if (mobSubmitBut) {
//         mobSubmitBut.addEventListener('click', () => {
//             mobForm.submit();
//         })
//     }
// }
//
//
//
// // function feedCatalogForm() {
// //     const feedCatalogForm = document.querySelector('[js_form_feed]');
// //     if (feedCatalogForm) {
// //         feedCatalogForm.addEventListener('submit', (event) => {
// //             event.preventDefault();
// //
// //             const formData = new FormData(feedCatalogForm);
// //             const jsonData = JSON.stringify(Object.fromEntries(formData));
// //             let userContent = { 'status': '', 'message': '' };
// //
// //             const request = BX.ajax({
// //                 url: '/local/templates/main/include/ajax/catalog/form_catalog.php',
// //                 method: 'POST',
// //                 data: jsonData,
// //                 dataType: 'json',
// //                 async: false,
// //                 onsuccess: function (response) {
// //                     response.status ? userContent.status = response.status : console.log(response);
// //                     response.message ? userContent.message = response.message : console.log(response);
// //                 },
// //                 onfailure: function (error) {
// //                     response.status = 'error';
// //                     response.message = 'server error';
// //                     console.log(error);
// //                 }
// //             });
// //             const statusDiv = document.querySelector('[js_form_feed_stat]')
// //             statusDiv.innerHTML ? statusDiv.innerHTML = userContent.status : ''
// //             const messDiv = document.querySelector('[js_form_feed_mess]')
// //             messDiv.innerHTML ? messDiv.innerHTML = userContent.message : ''
// //         })
// //     }
// // }
//
// const deskForm = document.querySelector('.catalog-hero__activity');
//     const mobForm = document.querySelector('.popup-filters');
//     const deskSelects = document.querySelectorAll('.catalog-hero__activity .select__select');
//     const deskCheckBox = document.querySelector('.catalog-check-desktop');
//
// const resetButtons = document.querySelectorAll('.catalog-hero__reset-text')
// if (resetButtons) {
//     resetButtons.forEach(resetButton => {
//         resetButton.addEventListener('click', () => {
//             deskSelects.forEach(select => {
//                 select.selectedIndex = -1;
//             });
//             deskCheckBox.removeAttribute('checked');
//             deskForm.submit(); // send only one of them
//         })
//     })
// }
//
//
// const form = document.querySelector('[data-filter-form]');
// const targetNode = document.querySelector('select[data-handle-filter-select]');
// let initialSelected = 'unset';
// const config = { attributes: true };
//
// const observer = new MutationObserver((mutationsList, observer) => {
//     for(let mutation of mutationsList) {
//         if (mutation.attributeName === 'data-select2-id') {
//             const optionValue = getValueOfSelectedOption(mutation.target.querySelectorAll('option'));
//             console.log(`Option value is: ${optionValue}`);
//             if (initialSelected === 'unset') {
//                 initialSelected = optionValue;
//             } else if (initialSelected != optionValue) {
//                 observer.disconnect();
//                 form.submit();
//             }
//         }
//     }
// });
// observer.observe(targetNode, config);
//
// function getValueOfSelectedOption(options) {
//     for (const option of options) {
//         if (option.hasAttribute('data-select2-id')) {
//             return `${option.value}`;
//         }
//     }
//     return '';
// }