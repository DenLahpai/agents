function copyAddress(current) {
    var end = document.getElementById('pax').innerHTML;

    while (current <= end) {
        var above = current - 1;
        var email = document.getElementById('textEmail'+above).value;
        var mobile = document.getElementById('textMobile'+above).value;
        var address = document.getElementById('textAddress'+above).value;
        var city = document.getElementById('textCity'+above).value;
        var state = document.getElementById('textState'+above).value;
        var country = document.getElementById('textCountry'+above).value;

        if(document.getElementById('checkboxVisitor'+current).checked == true){
            document.getElementById('textEmail'+current).value = email;
            document.getElementById('textMobile'+current).value = mobile;
            document.getElementById('textAddress'+current).value = address;
            document.getElementById('textCity'+current).value = city;
            document.getElementById('textState'+current).value = state;
            document.getElementById('textCountry'+current).value = country;
        }
        else {
            document.getElementById('textEmail'+current).value = "";
            document.getElementById('textMobile'+current).value = "";
            document.getElementById('textAddress'+current).value = "";
            document.getElementById('textCity'+current).value = "";
            document.getElementById('textState'+current).value = "";
            document.getElementById('textCountry'+current).value = "";
        }
        current++;
    }
}

function checkBeforeSubmit() {
    var end = document.getElementById('pax').innerHTML;
    var n = 1;
    var msg = 'All the fields in red are required!';
	var foo = false;

    while (n <= end) {
        if(document.getElementById('textFirstName'+n).value == '') {
            document.getElementById('textFirstName'+n).style.background = 'red';
			document.getElementById('checkboxCondition').checked = false;
			document.getElementById('message').innerHTML = msg;
        }
		else {
			document.getElementById('textFirstName'+n).style.background = '';
			document.getElementById('message').innerHTML = '';
			foo = true;
		}

        if (document.getElementById('textEmail'+n).value == '') {
            document.getElementById('textEmail'+n).style.background = 'red';
			document.getElementById('checkboxCondition').checked = false;
			document.getElementById('message').innerHTML = msg;
        }
		else {
			document.getElementById('textEmail'+n).style.background = '';
			document.getElementById('message').innerHTML = '';
			foo = true;
		}
        n++;
    }

	if (foo == true) {
		document.getElementById('buttonSubmit').disabled = false;
	}
}
