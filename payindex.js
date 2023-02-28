<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: ../home.html");
}
$db = mysqli_connect("localhost","root","","db_evplug");
?>
paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: '0.1'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("http://localhost/NEW EVPLUG/Customer/success.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("http://localhost/NEW EVPLUG/Customer/Oncancel.php")
    }
}).render('#paypal-payment-button');