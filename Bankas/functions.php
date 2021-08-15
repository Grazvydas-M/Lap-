  <?php
    function getBank(): array
    {
        if (!file_exists(__DIR__ . '/bank.json')) {
            // $bank = ['name' => '', 'surrname' => '', 'account' => '', 'funds' => 0, 'personalId' => ''];
            $bank = [];
            $bank = json_encode($bank);
            file_put_contents(__DIR__ . '/bank.json', $bank);
        }
        return json_decode(file_get_contents(__DIR__ . '/bank.json'), 1);
    }



    function setBank(array $bank): void
    {
        $bank = json_encode($bank);
        file_put_contents(__DIR__ . '/bank.json', $bank);
    }

    function router()
    {
        $route = $_GET['route'] ?? '';
        if ('GET' == $_SERVER['REQUEST_METHOD'] && '' === $route) {
            mainPage();
        } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'acc-list' === $route) {
            accList();
        } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'create-acc' == $route) {
            createAcc();
        } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'create' == $route) {
            create();
        } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'add-funds-page' == $route) {
            addFundsPage();
        } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'add-funds' == $route) {
            addFunds();
        } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'remove-funds-page' == $route) {
            removeFundsPage();
        } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'remove-funds' == $route) {
            removeFunds();
        } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'delete-acc' == $route) {
            deleteAcc();
        } else {
            echo 'Page not found 404';
            die;
        }
    }

    function accList()
    {

        $bank = getBank();
        require __DIR__ . '/view/accList.php';
    }

    function createAcc()
    {

        require __DIR__ . '/view/addAcc.php';
    }


    function mainPage()
    {
        require __DIR__ . '/view/main.php';
    }

    function accGenerator()
    {
        return 'LT ' . rand(0, 9999) . ' ' . rand(0, 9999) . ' ' . rand(0, 9999) . ' ' . rand(0, 9999);
    }

    function  create()
    {
        $bank =  getBank();
        $temp = ['name' => $_POST['Vardas'], 'surrname' => $_POST['Pavarde'], 'personalId' => $_POST['ak'], 'account' => accGenerator(), 'funds' => 0];
        $bank[] = $temp;
        setBank($bank);
        accList();
    }

    function addFundsPage()
    {
        $bank = getBank();
        foreach ($bank as $key => $value) {
            if ($bank[$key]['account'] == $_POST['account']) {
                $temp = $bank[$key];
            }
        }
        require __DIR__ . '/view/addFunds.php';
    }

    function addFunds()
    {
        $bank = getBank();
        foreach ($bank as $key => $value) {
            if ($bank[$key]['account'] == $_POST['account']) {
                if ($_POST['funds'] > 0) {
                    $bank[$key]['funds'] += $_POST['funds'];
                    addMessage('success', 'Lesos sekmingai pridetos');
                } else {
                    addMessage('danger', 'Lesos pridejimas negalimas');
                }
            }
        }
        setBank($bank);
        showMessages();
        addFundsPage();
    }


    function removeFundsPage()
    {
        $bank = getBank();
        foreach ($bank as $key => $value) {
            if ($bank[$key]['account'] == $_POST['account']) {
                $temp = $bank[$key];
            }
        }
        require __DIR__ . '/view/removeFunds.php';
    }

    function removeFunds()
    {
        $bank = getBank();
        foreach ($bank as $key => $value) {
            if ($bank[$key]['account'] == $_POST['account']) {
                if (($bank[$key]['funds'] >= $_POST['funds'])) {
                    $bank[$key]['funds'] -= $_POST['funds'];
                    addMessage('success', 'Lesos sekmingai nurasytos');
                } else {
                    addMessage('danger', 'Saskaitoje nepakanka lesu');
                }
            }
        }
        setBank($bank);
        showMessages();
        removeFundsPage();
    }


    function deleteAcc()
    {
        $bank = getBank();
        foreach ($bank as $key => $value) {
            if ($bank[$key]['account'] == $_POST['account']) {
                if ($value['funds'] == 0) {
                    unset($bank[$key]);
                    setBank($bank);
                    addMessage('success', 'Saskaita sekmingai istrinta');
                } else {
                    addMessage('danger', 'Saskaitoje yra lesu - istrynimas negalimas');
                }
            }
        }
        showMessages();
        accList();
    }

    function addMessage(string $type, string $msg): void
    {
        $_SESSION['msg'][] = ['type' => $type, 'msg' => $msg];
    }

    function clearMessages(): void
    {
        $_SESSION['msg'] = [];
    }

    function showMessages(): void
    {
        $messages = $_SESSION['msg'];
        clearMessages();
        require __DIR__ . '/view/msg.php';
    }