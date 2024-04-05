<div class="w-full mt-[1rem] lg:mt-[0rem] lg:!w-[90%] lg:bg-white lg:p-[2rem] rounded-[1rem]">
    <div>
        <a href="{{ route('dashboard.tickets') }}" class="hidden lg:flex items-center px-[1.5rem] py-[0.9rem] border border-[#BDBDC7] w-max rounded-[1rem] cursor-pointer">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.25 3.86355C8.25 3.57656 8.25 3.43307 8.15941 3.34476C8.06881 3.25645 7.92681 3.26008 7.64281 3.26733C7.05458 3.28235 6.52998 3.31039 6.06107 3.36271C5.02537 3.47828 4.17461 3.71963 3.44269 4.26216C2.93954 4.63512 2.50404 5.0968 2.15462 5.62508C1.50935 6.60064 1.31903 7.78333 1.2512 9.34643C1.21882 10.0926 1.84739 10.5938 2.46441 10.5938C3.39631 10.5938 4.2236 11.4064 4.2236 12.5C4.2236 13.5936 3.39631 14.4062 2.46441 14.4062C1.84739 14.4062 1.21882 14.9074 1.2512 15.6536C1.31903 17.2167 1.50935 18.3994 2.15462 19.3749C2.50404 19.9032 2.93955 20.3649 3.44269 20.7378C4.17461 21.2804 5.02537 21.5217 6.06107 21.6373C6.52998 21.6896 7.05458 21.7176 7.64281 21.7327C7.92681 21.7399 8.06881 21.7435 8.15941 21.6552C8.25 21.5669 8.25 21.4234 8.25 21.1365L8.25 3.86355ZM9.75 21.5532C9.75 21.6619 9.8381 21.75 9.94678 21.75H9.94687H14.0533H14.0534C15.6601 21.75 16.9289 21.75 17.9391 21.6373C18.9748 21.5217 19.8256 21.2804 20.5575 20.7378C21.0606 20.3649 21.4961 19.9032 21.8456 19.3749C22.4908 18.3995 22.6811 17.2169 22.749 15.6541C22.7814 14.9075 22.1524 14.4062 21.5352 14.4062C20.6033 14.4062 19.776 13.5936 19.776 12.5C19.776 11.4064 20.6033 10.5938 21.5352 10.5938C22.1524 10.5938 22.7814 10.0925 22.749 9.3459C22.6811 7.78307 22.4908 6.60053 21.8456 5.62508C21.4961 5.0968 21.0606 4.63512 20.5575 4.26216C19.8256 3.71963 18.9748 3.47828 17.9391 3.36271C16.9289 3.24998 15.6601 3.24999 14.0534 3.25H14.0534H9.94683H9.94682C9.83812 3.25 9.75 3.33812 9.75 3.44683L9.75 21.5532Z" fill="#141B34"/>
                </svg>

            <span class="mr-[0.5rem]">بازگشت به تیکت ها</span>
        </a>
    </div>

    <div class="bg-[#F8F9FB] rounded-[0.5rem] lg:p-[1rem] mt-[1rem]">
        <div class="hidden lg:flex justify-between items-center text-[14px] text-[#808191]">
            <div class="flex h-[2rem]">
                <div class="ml-[1rem] pl-[1rem] border-solid border-l border-[#808191] h-full flex justify-center items-center">
                    <span>شماره تیکت</span>

                    <span class="font-semibold text-black mr-[0.5rem]">123456</span>
                </div>

                <div class="flex justify-center items-center h-full">
                    <span>موضوع</span>

                    <span class="font-semibold text-black mr-[0.5rem]">مشکل پرداخت خرید 12213123</span>
                </div>
            </div>

            <div class="flex h-[2rem]">
                <div class="ml-[1rem] pl-[1rem] border-solid border-l border-[#808191] h-full flex justify-center items-center">
                    <span class="font-semibold text-[#009829]">وضعیت باز</span>
                </div>

                <div class="flex justify-center items-center h-full">
                    <span>آخرین آپدیت</span>

                    <span class="font-semibold text-black mr-[0.5rem]">2 ساعت قبل</span>
                </div>
            </div>
        </div>

        <div class="lg:hidden flex flex-col bg-white p-[1rem] rounded-[0.5rem] justify-center items-center text-[14px] text-[#808191]">
            <div>
                <span>شماره تیکت</span>

                <span class="font-semibold text-black mr-[0.5rem]">123456</span>
            </div>

            <div class="my-[1rem]">
                <span>موضوع</span>

                <span class="font-semibold text-black mr-[0.5rem]">مشکل پرداخت خرید 12213123</span>
            </div>

            <div>
                <span class="text-[#009829] text-[14px]">وضعیت باز</span>
            </div>
        </div>

        <div class="lg:border-t border-solid border-[#BDBDC7] mt-[1rem] pt-[1rem]">
            <div class="flex">
                <div class="w-full bg-white p-[1rem] rounded-[0.5rem]">
                    <div class="text-[12px] font-semibold mb-[0.5rem]">
                        <span class="text-[#0F45FF] mr-[0.5rem]">َشما</span>
                    </div>

                    <div class="text-justify font-semibold text-[14px]">
                        <p> سلام رفیق، میدونم که حالت عالیه، با کمکت تا الان 4,029,000 تومان برای خیریه جمع آوری شده میتونی پنج شنبه هر هفته جزئیات کمک های جمع آوری شده برای خیریه رو از طریق اینستاگرام مشاهده کنی اینستاگرام ما : FarsGamerCom ممنون از انتخاب و اعتمادت - فارس گیمر نیاز هر گیمر - FarsGamer.com</p>
                    </div>

                    <div class="text-left mt-[1rem] text-[12px] text-[#BDBDC7]">
                        <span>1402/02/03</span>
                    </div>
                </div>

                <div class="mr-[1rem] lg:w-[7rem] lg:mr-[2rem] flex justify-center items-center h-full flex-col">
                    <div class="w-[3rem] h-[3rem] rounded-full bg-white relative">
                        <img class="max-w-[72px] absolute right-[-1rem] top-[-1rem]" src="https://farsgamer.com/media/660eb1b886b50.png" alt="">
                    </div>

                    <div class="hidden lg:flex text-[12px] text-center font-semibold">
                        <span>مصطفی فرشچی</span>
                    </div>

                    <div class="hidden lg:flex text-[12px] text-center text-[#808191]">
                        <span>پشتیبانی سفارشات</span>
                    </div>
                </div>
            </div>

            <div class="text-[#BDBDC7] border-b border-solid border-[#BDBDC7] py-[1rem] my-[2rem] text-center">
                <span>1403/02/04</span>
            </div>



            <div class="text-right text-[14px] text-[#808191] my-[1rem]">
                <span>آخرین پیام</span>
            </div>

            <div class="flex">
                <div class="lg:w-[5rem] ml-[1rem] flex justify-center items-center h-full flex-col">
                    <div class="w-[3rem] h-[3rem] rounded-full bg-white relative">
                        <img class="max-w-[72px] absolute right-[-0.5rem] top-[-0.5rem]" src="https://farsgamer.com/media/660eb28364d2f.png" alt="">
                    </div>

                    <div class="hidden lg:flex text-[12px] text-center font-semibold">
                        <span>شما</span>
                    </div>
                </div>
                <div class="w-full bg-white p-[1rem] rounded-[0.5rem]">
                    <div class="text-[12px] font-semibold mb-[0.5rem]">
                        <span>پشتیبانی محصول</span>

                        <span class="text-[#0F45FF] mr-[0.5rem]">مصطفی فرشچی</span>
                    </div>

                    <div class="text-justify font-semibold text-[14px]">
                        <p> سلام رفیق، میدونم که حالت عالیه، با کمکت تا الان 4,029,000 تومان برای خیریه جمع آوری شده میتونی پنج شنبه هر هفته جزئیات کمک های جمع آوری شده برای خیریه رو از طریق اینستاگرام مشاهده کنی اینستاگرام ما : FarsGamerCom ممنون از انتخاب و اعتمادت - فارس گیمر نیاز هر گیمر - FarsGamer.com</p>
                    </div>

                    <div class="my-[2em]">
                        <span class="text-[14px] text-[#808191] ml-[1.5rem]">فایل اپلود شده</span>

                        <div class="flex flex-wrap">
                            <a href="#" class="text-[14px] text-[#808191] my-[0.5rem] mx-[0.5rem] px-[1.5rem] py-[0.5rem] !text-[#808191] border border-[#808191] rounded-[0.5rem]">text.png</a>

                            <a href="#" class="text-[14px] text-[#808191] my-[0.5rem] mx-[0.5rem] px-[1.5rem] py-[0.5rem] !text-[#808191] border border-[#808191] rounded-[0.5rem]">text.png</a>

                            <a href="#" class="text-[14px] text-[#808191] my-[0.5rem] mx-[0.5rem] px-[1.5rem] py-[0.5rem] !text-[#808191] border border-[#808191] rounded-[0.5rem]">text.png</a>
                        </div>
                    </div>

                    <div class="text-left mt-[1rem] text-[12px] text-[#BDBDC7]">
                        <span>1402/02/03</span>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-[24rem] bg-white rounded-[1rem] flex my-[2rem] p-[2rem]">
                    <div class="w-[7rem] ml-[1rem]">
                        <img src="https://farsgamer.com/media/660eb3f06bc94.png" alt="">
                    </div>

                    <div class="text-center text-[14px] text-[#374151] font-semibold">
                        <p>لطفا تا زمان پاسخ پشتیبانی صبور باشید
                            نتیجه تیکت  از طریق
                            پیامک به شما اعلام خواهد شد</p>
                    </div>
                </div>
            </div>


            <div>
                <div class="my-[0.5rem]">
                    <textarea class="input-hover w-full bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] p-[1rem] h-[5rem]" placeholder="لطفا متن موضوع  خود را وارد نمایید"></textarea>
                </div>

                <div class="flex justify-end">
                    <div class="flex justify-center mt-[0.5rem] w-full lg:w-[50%] xl:w-[40%]">
                        <button type="button" class="flex justify-center items-center bg-transparent border-solid !text-[#0F45FF] !border !border-[#0F45FF] input-submit-style !rounded-[0.5rem] !min-h-[2.5rem] !w-[35%]">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.82338 12L4.27922 10.4558C2.57359 8.75022 2.57359 5.98485 4.27922 4.27922C5.98485 2.57359 8.75022 2.57359 10.4558 4.27922L19.7208 13.5442C21.4264 15.2498 21.4264 18.0152 19.7208 19.7208C18.0152 21.4264 15.2498 21.4264 13.5442 19.7208L10.0698 16.2464C9.00379 15.1804 9.00379 13.4521 10.0698 12.386C11.1358 11.32 12.8642 11.32 13.9302 12.386L15.8604 14.3162" stroke="#0F45FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <span class="mr-[0.5rem]">ارسال فایل</span>
                        </button>

                        <button type="button" class="input-submit-style !rounded-[0.5rem] !min-h-[2.5rem] mr-[0.5rem] !w-[65%]">ارسال</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
