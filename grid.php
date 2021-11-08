<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARIA Grid Role Example</title>
		<?php include("includes/common-head-tags.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/grid.css" />

</head>

<body>

    <?php include("includes/documentation-header.php"); ?>

    <main>

        <aside class="notes">
            <p>Examples on this page are taken from
                <a href="https://www.w3.org/TR/2017/NOTE-wai-aria-practices-1.1-20171214/examples/grid/dataGrids.html">
                    W3C's Data Grid Examples</a>. The
                <code>aria-sort</code> attribute doesn't seem to have any effect on NVDA.
            </p>
        </aside>

        <h1>ARIA Grid Role Example</h1>



        <h3 id="grid2Label">
            Transactions January 1 through January 7
        </h3>
        <table role="grid" aria-labelledby="grid2Label" class="data" id="ex-grid">
            <tbody>
                <tr>
                    <th aria-sort="ascending">
                        <span tabindex="-1" role="button">
                            Date
                            <span tabindex="-1"></span>
                        </span>
                    </th>
                    <th tabindex="-1">
                        Type
                    </th>
                    <th tabindex="-1">
                        Description
                    </th>
                    <th tabindex="-1">
                        Category
                    </th>
                    <th aria-sort="none">
                        <span tabindex="-1" role="button">
                            Amount
                        </span>
                    </th>
                    <th tabindex="-1">
                        Balance
                    </th>
                </tr>
                <tr>
                    <td tabindex="-1">
                        01-Jan-16
                    </td>
                    <td tabindex="-1">
                        Deposit
                    </td>
                    <td>
                        <div class="editable-text">
                            <span class="edit-text-button" tabindex="-1" role="button">
                                Cash Deposit
                            </span>
                            <input class="edit-text-input hidden" tabindex="-1" value="">
                        </div>
                    </td>
                    <td class="menu-wrapper">
                        <button tabindex="-1" aria-haspopup="true" aria-controls="menu1">
                            Income
                        </button>
                        <ul role="menu" id="menu1">
                            <li role="menuitem">
                                Income
                            </li>
                            <li role="menuitem">
                                Groceries
                            </li>
                            <li role="menuitem">
                                Dining Out
                            </li>
                            <li role="menuitem">
                                Auto
                            </li>
                            <li role="menuitem">
                                Household
                            </li>
                            <li role="menuitem">
                                Beauty
                            </li>
                        </ul>
                    </td>
                    <td tabindex="-1">
                        $1,000,000.00
                    </td>
                    <td tabindex="-1">
                        $1,000,000.00
                    </td>
                </tr>
                <tr>
                    <td tabindex="-1">
                        02-Jan-16
                    </td>
                    <td tabindex="-1">
                        Debit
                    </td>
                    <td>
                        <div class="editable-text">
                            <span class="edit-text-button" tabindex="-1" role="button">
                                Down Town Grocery
                            </span>
                            <input class="edit-text-input hidden" tabindex="-1" value="">
                        </div>
                    </td>
                    <td class="menu-wrapper">
                        <button tabindex="-1" aria-haspopup="true" aria-controls="menu2">
                            Groceries

                        </button>
                        <ul role="menu" id="menu2">
                            <li role="menuitem">
                                Income
                            </li>
                            <li role="menuitem">
                                Groceries
                            </li>
                            <li role="menuitem">
                                Dining Out
                            </li>
                            <li role="menuitem">
                                Auto
                            </li>
                            <li role="menuitem">
                                Household
                            </li>
                            <li role="menuitem">
                                Beauty
                            </li>
                        </ul>
                    </td>
                    <td tabindex="-1">
                        $250.00
                    </td>
                    <td tabindex="-1">
                        $999,750.00
                    </td>
                </tr>
                <tr>
                    <td tabindex="-1">
                        03-Jan-16
                    </td>
                    <td tabindex="-1">
                        Debit
                    </td>
                    <td>
                        <div class="editable-text">
                            <span class="edit-text-button" tabindex="-1" role="button">
                                Hot Coffee
                            </span>
                            <input class="edit-text-input hidden" tabindex="-1" value="">
                        </div>
                    </td>
                    <td class="menu-wrapper">
                        <button tabindex="-1" aria-haspopup="true" aria-controls="menu3">
                            Dining Out

                        </button>
                        <ul role="menu" id="menu3">
                            <li role="menuitem">
                                Income
                            </li>
                            <li role="menuitem">
                                Groceries
                            </li>
                            <li role="menuitem">
                                Dining Out
                            </li>
                            <li role="menuitem">
                                Auto
                            </li>
                            <li role="menuitem">
                                Household
                            </li>
                            <li role="menuitem">
                                Beauty
                            </li>
                        </ul>
                    </td>
                    <td tabindex="-1">
                        $9.00
                    </td>
                    <td tabindex="-1">
                        $999,741.00
                    </td>
                </tr>
                <tr>
                    <td tabindex="-1">
                        04-Jan-16
                    </td>
                    <td tabindex="-1">
                        Debit
                    </td>
                    <td>
                        <div class="editable-text">
                            <span class="edit-text-button" tabindex="-1" role="button">
                                The Filling Station
                            </span>
                            <input class="edit-text-input hidden" tabindex="-1" value="">
                        </div>
                    </td>
                    <td class="menu-wrapper">
                        <button tabindex="-1" aria-haspopup="true" aria-controls="menu4">
                            Auto
                        </button>
                        <ul role="menu" id="menu4">
                            <li role="menuitem">
                                Income
                            </li>
                            <li role="menuitem">
                                Groceries
                            </li>
                            <li role="menuitem">
                                Dining Out
                            </li>
                            <li role="menuitem">
                                Auto
                            </li>
                            <li role="menuitem">
                                Household
                            </li>
                            <li role="menuitem">
                                Beauty
                            </li>
                        </ul>
                    </td>
                    <td tabindex="-1">
                        $88.00
                    </td>
                    <td tabindex="-1">
                        $999,653.00
                    </td>
                </tr>
                <tr>
                    <td tabindex="-1">
                        05-Jan-16
                    </td>
                    <td tabindex="-1">
                        Debit
                    </td>
                    <td>
                        <div class="editable-text">
                            <span class="edit-text-button" tabindex="-1" role="button">
                                Tinker's Hardware
                            </span>
                            <input class="edit-text-input hidden" tabindex="-1" value="">
                        </div>
                    </td>
                    <td class="menu-wrapper">
                        <button tabindex="-1" aria-haspopup="true" aria-controls="menu5">
                            Household

                        </button>
                        <ul role="menu" id="menu5">
                            <li role="menuitem">
                                Income
                            </li>
                            <li role="menuitem">
                                Groceries
                            </li>
                            <li role="menuitem">
                                Dining Out
                            </li>
                            <li role="menuitem">
                                Auto
                            </li>
                            <li role="menuitem">
                                Household
                            </li>
                            <li role="menuitem">
                                Beauty
                            </li>
                        </ul>
                    </td>
                    <td tabindex="-1">
                        $3,421.00
                    </td>
                    <td tabindex="-1">
                        $996,232.00
                    </td>
                </tr>
                <tr>
                    <td tabindex="-1">
                        06-Jan-16
                    </td>
                    <td tabindex="-1">
                        Debit
                    </td>
                    <td>
                        <div class="editable-text">
                            <span class="edit-text-button" tabindex="-1" role="button">
                                Cutey's Salon
                            </span>
                            <input class="edit-text-input hidden" tabindex="-1" value="">
                        </div>
                    </td>
                    <td class="menu-wrapper">
                        <button tabindex="-1" aria-haspopup="true" aria-controls="menu6">
                            Beauty
                        </button>
                        <ul role="menu" id="menu6">
                            <li role="menuitem">
                                Income
                            </li>
                            <li role="menuitem">
                                Groceries
                            </li>
                            <li role="menuitem">
                                Dining Out
                            </li>
                            <li role="menuitem">
                                Auto
                            </li>
                            <li role="menuitem">
                                Household
                            </li>
                            <li role="menuitem">
                                Beauty
                            </li>
                        </ul>
                    </td>
                    <td tabindex="-1">
                        $700.00
                    </td>
                    <td tabindex="-1">
                        $995,532.00
                    </td>
                </tr>
                <tr>
                    <td tabindex="-1">
                        07-Jan-16
                    </td>
                    <td tabindex="-1">
                        Debit
                    </td>
                    <td>
                        <div class="editable-text">
                            <span class="edit-text-button" tabindex="-1" role="button">
                                My Chocolate Shop
                            </span>
                            <input class="edit-text-input hidden" tabindex="-1" value="">
                        </div>
                    </td>
                    <td class="menu-wrapper">
                        <button tabindex="-1" aria-haspopup="true" aria-controls="menu7">
                            Dining Out

                        </button>
                        <ul role="menu" id="menu7">
                            <li role="menuitem">
                                Income
                            </li>
                            <li role="menuitem">
                                Groceries
                            </li>
                            <li role="menuitem">
                                Dining Out
                            </li>
                            <li role="menuitem">
                                Auto
                            </li>
                            <li role="menuitem">
                                Household
                            </li>
                            <li role="menuitem">
                                Beauty
                            </li>
                        </ul>
                    </td>
                    <td tabindex="-1">
                        $41.00
                    </td>
                    <td tabindex="-1">
                        $995,491.00
                    </td>
                </tr>
            </tbody>
        </table>
    </main>


    <script src="js/shared/w3c-examples-stub.js"></script>
    <script src="js/shared/dataGrid.js"></script>
    <script src="js/dataGrids.js"></script>
    <script src="js/shared/menuButton.js"></script>
</body>

</html>