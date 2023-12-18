<!-- Write a Program that will  prompt a user to enter his or her name,phone number,email,Initial Balance also adding up additional method for Depositing and Withdrawing the amounts and when he or she withrawing  showing which amount is remaining from his or her account -->
<!-- Hint:User cannot withdraw amount which is greater than the available balance
<?php 

class BankAccount {
    private $name;
    private $phoneNumber;
    private $email;
    private $balance;

    public function __construct($name, $phoneNumber, $email, $initialBalance) {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $" . $amount . "\n";
        } else {
            echo "Invalid deposit amount.\n";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0) {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                echo "Withdrawn: $" . $amount . "\n";
            } else {
                echo "Insufficient balance. Cannot withdraw.\n";
            }
        } else {
            echo "Invalid withdrawal amount.\n";
        }
    }

    public function checkBalance() {
        echo "Available Balance: $" . $this->balance . "\n";
    }
}

echo "Welcome to the Bank Account Management System\n";

echo "Enter your name: ";
$name = readline();

echo "Enter your phone number: ";
$phoneNumber = readline();

echo "Enter your email: ";
$email = readline();

echo "Enter your initial balance: $";
$initialBalance = (double)readline();

$account = new BankAccount($name, $phoneNumber, $email, $initialBalance);

while (true) {
    echo "\nChoose an option:\n";
    echo "1. Deposit\n";
    echo "2. Withdraw\n";
    echo "3. Check Balance\n";
    echo "4. Exit\n";
    $choice = (int)readline();

    switch ($choice) {
        case 1:
            echo "Enter deposit amount: $";
            $depositAmount = (double)readline();
            $account->deposit($depositAmount);
            break;
        case 2:
            echo "Enter withdrawal amount: $";
            $withdrawAmount = (double)readline();
            $account->withdraw($withdrawAmount);
            break;
        case 3:
            $account->checkBalance();
            break;
        case 4:
            echo "Goodbye!\n";
            exit;
        default:
            echo "Invalid option. Please choose a valid option.\n";
    }
}
?>