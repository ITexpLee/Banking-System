<?php

//Creating functional component

function customers($firstname, $lastname, $account_no, $balance, $cust_id)
{
    $element = '<form id="profileform" method="post">
                <div class="card text-center mt-3">
                    <img class="card-img-top robo-img" src="https://robohash.org/' . $firstname . '" alt="card-img" style="width: 180px;">
                    <div class="card-body">
                        <h4 class="card-title">' . $firstname . ' ' . $lastname . '</h4>
                        <p class="card-text">Account No: ' . $account_no . '<br> Balance: &#8377;' . $balance . '</p>
                        <button type="submit" class="btn btn-outline-warning my-3" name="view">See Profile</button>
                        <input type="hidden" name="cust_id" value=' . $cust_id . '>
                    </div>
                </div>
            </form>';
    echo $element;
}

//Passbook Component

function modal($firstname, $lastname, $account_no, $gender, $email, $phone_no, $balance, $cust_id)
{
    $element2 = '<form method="post" action="transaction.php"> 
                 <h5>' . $firstname . ' ' . $lastname . '</h5>
                 <p><span>Gender:' . $gender . '</span> | <span>Account No:' . $account_no . '</span></p>
                 <p><span>Email:' . $email . '</span> | <span>Mobile No:' . $phone_no . '</span></p>
                 <p>Balance: ' . $balance . ' </p>
                 <input type="hidden" name="sender_id" value=' . $cust_id . '>
                 <input type="hidden" name="balance" value=' . $balance . '>
                 <input type="number" name="amount">
                 <button type="submit" class="btn btn-outline-danger" name="transfer">Transfer</button>
                 </form>
                 ';

    echo $element2;
}

//Functional Component for Receivers

function Receivers($firstname, $lastname, $account_no, $balance, $cust_id, $sender_id, $sender_balance, $amount)
{
    $element = '<form id="transactionform" method="post">
                <div class="card text-center mt-3">
                    <img class="card-img-top robo-img" src="https://robohash.org/' . $firstname . '" alt="card-img" style="width: 180px;">
                    <div class="card-body">
                        <h4 class="card-title">' . $firstname . ' ' . $lastname . '</h4>
                        <p class="card-text">Account No: ' . $account_no . '<br> Balance: &#8377;' . $balance . '</p>
                        <button type="submit" class="btn btn-outline-warning my-3" name="receive">Send</button>
                        <input type="hidden" name="sender_id" value=' . $sender_id . '>
                        <input type="hidden" name="sender_balance" value=' . $sender_balance . '>
                        <input type="hidden" name="amount" value=' . $amount . '>
                        <input type="hidden" name="receiver_id" value=' . $cust_id . '>
                        <input type="hidden" name="balance1" value=' . $balance . '>
                    </div>
                </div>
            </form>';
    echo $element;
}
