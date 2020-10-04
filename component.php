<?php

//Creating functional component

function customers($firstname, $lastname, $account_no, $balance, $cust_id)
{
    $element = '<form action="admin.php" method="post">
                <div class="card text-center mt-3">
                    <img class="card-img-top robo-img" src="https://robohash.org/' . $firstname . '" alt="card-img" style="width: 180px;">
                    <div class="card-body">
                        <h4 class="card-title">' . $firstname . ' ' . $lastname . '</h4>
                        <p class="card-text">Account No: ' . $account_no . '<br> Balance: &#8377;' . $balance . '</p>
                        <button type="submit" class="btn btn-warning my-3" name="view">See Profile</button>
                        <input type="hidden" name="cust_id" value=' . $cust_id . '>
                    </div>
                </div>
            </form>';
    echo $element;
}
