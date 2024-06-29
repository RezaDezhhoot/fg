<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $OrderDetail->id }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @font-face {
            font-family: "IRANSansWeb";
            src: url("../fonts/IRANSansWeb.eot");
            /* IE */
            src: url("../fonts/IRANSansWeb.eot?#iefix") format("embedded-opentype"),
                /* IE */
                url("../fonts/IRANSansWeb.woff") format("woff"),
                /* Modern Browsers */
                url("../fonts/IRANSansWeb.ttf") format("truetype");
            /* Safari, Android, iOS */
            font-weight: normal;
        }

        * {
            font-family: IRANSansWeb, Poppins, Helvetica, "sans-serif";
        }

        @page {
            size: landscape,A5;
            margin: 0;
        }

        @media print {

            /* html,
            body {
                width: 148mm;
                height: 210mm;
            } */

            button {
                display: none;
            }
        }

        .post-tag {
            width: 180mm;
            min-height: 118mm;
            background-color: #fff;
            position: relative;
            border: 5px solid black;
            border-radius: 1rem;
            padding: 1rem;
            font-size: 1.7rem;
            font-weight: 500;
        }

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 200mm;
            height: 138mm;
            margin: 0rem;
            padding: 0rem;
        }
    </style>
</head>

<body>
    <div class="post-tag flex">
        <div class="w-[65%] h-full flex flex-col justify-between">
            <div class="font-semibold">
                <p>ارسال کننده :</p>
            </div>

            <div>
                <p>تهران - سعادت آباد - مجتمع تجاری اپال - طبقه 7 - پلاک 743 - فارس گیمر شعبه اپال</p>
            </div>

            <div class="font-semibold">
                <p>گیرنده : </p>
            </div>

            <div>
                <p>
                    <span>{{ $OrderDetail->order->name ?? '' }} {{ $OrderDetail->order->family ?? '' }}</span>
                    ،
                    <span>{{ $OrderDetail->order->mobile ?? '' }}</span>
                </p>
            </div>

            <div>
                <p>{{ $OrderDetail->order->province ?? '' }} , {{ $OrderDetail->order->city ?? '' }} , {{ $OrderDetail->order->address ?? '' }}</p>
            </div>

            <div>
                <p>کد پستی : <span>{{ $OrderDetail->order->postalCode ?? '' }}</span></p>
            </div>
        </div>

        <div class="w-[35%] mr-[2rem] h-full">
            <div class="w-full">
                <img class="w-full" src="https://farsgamer.com/media/665c0bd4e1f26.png" alt="farsgamer">
            </div>

            <div class="text-left font-semibold mt-[0.5rem]">
                <p dir="ltr" class="text-left">#{{ $OrderDetail->order->tracking_code ?? '' }}</p>

                <p>{{ $OrderDetail->product->title ?? '' }}</p>
            </div>
        </div>
    </div>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute left-4 bottom-4"
        onclick="window.print()">Print this page</button>
</body>

</html>
