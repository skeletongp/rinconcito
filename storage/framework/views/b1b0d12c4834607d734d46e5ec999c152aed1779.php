<div class="invoice-card">
    <div class="turn">
        <span style="color: white"><?php echo e($invoice->fromToday()->count()); ?></span>
    </div>
    <div class="back hide-print">
        <a href="<?php echo e(route('invoices.index')); ?>">
            <- Volver</a>
    </div>
    <div class="invoice-title">
        <div id="main-title">
            <h4>FACTURA</h4>
            <span><?php echo e($invoice->num); ?></span>
        </div>

        <div class="div-date">
            <span id="date"><?php echo e($invoice->day); ?></span>
            <span id="date"><?php echo e($invoice->client->name); ?></span>
        </div>
    </div>

    <div class="invoice-details">
        <table class="invoice-table">
            <thead>
                <tr>
                    <td>PRODUCTO</td>
                    <td>CANT.</td>
                    <td>$$</td>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $invoice->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="row-data">
                        <td>
                            <span class="span-content">
                                <?php echo e($detail->product->name); ?>

                            </span>
                        </td>
                        <td>
                            <span class="span-content">
                                <?php echo e($detail->cant); ?>

                            </span>
                        </td>
                        <td>
                            <span class="span-content">
                                $<?php echo e(round($detail->cant * $detail->product->price)); ?>

                            </span>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr class="subtotal">
                    <td colspan="2">Descuento</td>
                    <td>
                        <span>$<?php echo e(number_format($invoice->discount, 2)); ?></span>
                    </td>
                </tr>
                <tr class="calc-row">
                    <td colspan="2">Total</td>
                    <td>
                        <span>$<?php echo e(number_format($invoice->payed, 2)); ?></span>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="invoice-footer">
        <span style="font-size: medium; margin-top:10px; font-weight:bold"> <?php echo e(env('COMPANY_NAME')); ?></span>
        <span style="font-size: small; "> <?php echo e($invoice->user->fullname); ?></span>
        <span style="font-size: small; margin-bottom:10px"> <?php echo e(env('COMPANY_PHONE')); ?></span>
        <span style="font-size: small"> Gracias por su compra</span>
    </div>
</div>
<button class="btn btn-primary hide-print" id="printbtn">IMPRIMIR</button>
<script>
    window.addEventListener('load', function() {
        /*  window.print();
         */
        const btn = document.getElementById('printbtn');
        btn.addEventListener('click', function() {
            window.print();
        })
    })
</script>
<style>
    @import  url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 0.5px;
    }

    body {
        width: 80mm;
        margin: auto
    }

    td {
        text-align: center;
        font-weight: bold;
    }


    .span-content {
        padding: 10px;
    }

    .invoice-card {
        display: flex;
        flex-direction: column;
        position: relative;
        padding: 2.5em 1em 2em 1em;
        margin: auto;
        margin-top: 5px;
        min-height: 25em;
        width: 78mm;
        background-color: #fff;
        border-radius: 5px;
        border-bottom: dashed 2.5px #aaa;
    }

    .turn {
        position: absolute;
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        background-color: black;
        left: 50%;
        transform: translate(-50%);
        top: 0.5em;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .back {
        position: absolute;
        top: 0.5em;
        left: 0.5em;
        font-weight: bold;

    }

    .back a {
        text-decoration: none;
        color: black;
    }

    .invoice-title {
        flex: 3;
    }

    .invoice-title #date {
        display: block;
        margin: 8px 0;
        font-size: 12px;
        color: black;
    }

    .div-date {
        display: flex;
        justify-content: space-between;
        color: black
    }

    .invoice-title #main-title {
        display: flex;
        justify-content: space-between;
        margin-top: 2em;
    }

    .invoice-title #main-title h4 {
        letter-spacing: 2.5px;
    }

    .invoice-title span {
        color: rgba(0, 0, 0, 0.4);
    }

    .invoice-details {
        flex: 1;
        border-top: 0.5px dashed grey;
        border-bottom: 0.5px dashed grey;
        display: flex;
        align-items: center;
    }

    .invoice-table {
        width: 100%;
        border-collapse: collapse;
    }

    .invoice-table thead tr td {
        font-size: 12px;
        letter-spacing: 1px;
        color: black;
        padding: 8px 0;
    }

    .invoice-table thead tr td:nth-last-child(1),
    .row-data td:nth-last-child(1),
    .calc-row td:nth-last-child(1) {
        text-align: center;
        font-weight: bold;
    }

    .invoice-table tbody tr td {
        padding: 8px 0;
        letter-spacing: 0;
    }

    .invoice-table .row-data #unit {
        text-align: center;
    }

    .invoice-table .row-data span {
        font-size: 13px;
        color: rgba(0, 0, 0, 0.6);
        text-align: center
    }

    .invoice-footer {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .invoice-footer #later {
        margin-right: 5px;
    }

    .calc-row {
        font-size: small;
        text-transform: uppercase;
    }
    .calc-row td  {
        padding: 8px;
        padding-top: 1px;
        text-transform: uppercase;
    }
    .calc-row td span {
        padding: 8px;
        padding-top: 1px;
        text-transform: uppercase;
    }
    .subtotal{
        font-size: small;
    }
    .subtotal td{
        padding: 1px !important;
        padding-top: 1px;
    }
    .subtotal td span{
        padding: 1px !important;
    }
    
   
    #printbtn {
        padding: 6px 8px;
        background: none;
        cursor: pointer;
        letter-spacing: 1px;
        outline: none;
        font-weight: bold;
        margin-top: 8px;
        margin-left: auto;
        border: solid 1px #aaa;
        border-radius: 1em;
    }

    @media  print {
        .hide-print {
            display: none;
        }
    }

</style>
<?php /**PATH D:\laragon\www\holy-hope\resources\views/pages/invoices/show.blade.php ENDPATH**/ ?>