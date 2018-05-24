import 'bootstrap';
import './scss/app.scss';

import notification from './js/Notification';

notification.log('here we go 12');
notification.announce('here we go 12');

class Form {
    constructor(){
        let numbers = [ 5, 10, 15 ].map(number => number * 2);

        console.log(numbers);
    }
}

new Form();