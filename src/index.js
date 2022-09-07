import "./styles.scss";

import {MDCTextField} from '@material/textfield';
import {MDCRipple} from '@material/ripple';
import {MDCFormField} from '@material/form-field';
import {MDCRadio} from '@material/radio';
import {MDCCheckbox} from '@material/checkbox';
import {MDCSelect} from '@material/select';
import {MDCMenu} from '@material/menu';


for (const el of document.querySelectorAll('.mdc-text-field')) {
    const textField = new MDCTextField(el);
}

for (const el of document.querySelectorAll('.mdc-button')) {
    const buttonRipple = new MDCRipple(el);
}

for (const el of document.querySelectorAll('.mdc-radio')) {
    const radio = new MDCRadio(el);

    for (const el of document.querySelectorAll('.mdc-form-field')) {
        const formField = new MDCFormField(el);
        formField.input = radio;
    }

}

for (const el of document.querySelectorAll('.mdc-checkbox')) {
    const checkbox = new MDCCheckbox(el);

    for (const el of document.querySelectorAll('.mdc-form-field')) {
        const formField = new MDCFormField(el);
        formField.input = checkbox;
    }

}

for (const el of document.querySelectorAll('.mdc-select')) {
    const select = new MDCSelect(el);

    select.listen('MDCSelect:change', () => {
        console.log(`Selected option at index ${select.selectedIndex} with value "${select.value}"`);
    });
}

const selector = '.mdc-button, .mdc-icon-button, .mdc-card__primary-action';
const ripples = [].map.call(document.querySelectorAll(selector), function(el) {
  return new MDCRipple(el);
});

for (const el of document.querySelectorAll('.mdc-menu')) {
    el.open = true;
}