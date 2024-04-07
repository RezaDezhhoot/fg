<div class="w-full mt-[1rem] lg:mt-[0rem] lg:!w-[34rem]">
    <div>
        <a href="{{ route('dashboard.tickets') }}"
            class="flex items-center px-[2rem] py-[1rem] bg-white w-max rounded-[1rem] cursor-pointer">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.25 3.86355C8.25 3.57656 8.25 3.43307 8.15941 3.34476C8.06881 3.25645 7.92681 3.26008 7.64281 3.26733C7.05458 3.28235 6.52998 3.31039 6.06107 3.36271C5.02537 3.47828 4.17461 3.71963 3.44269 4.26216C2.93954 4.63512 2.50404 5.0968 2.15462 5.62508C1.50935 6.60064 1.31903 7.78333 1.2512 9.34643C1.21882 10.0926 1.84739 10.5938 2.46441 10.5938C3.39631 10.5938 4.2236 11.4064 4.2236 12.5C4.2236 13.5936 3.39631 14.4062 2.46441 14.4062C1.84739 14.4062 1.21882 14.9074 1.2512 15.6536C1.31903 17.2167 1.50935 18.3994 2.15462 19.3749C2.50404 19.9032 2.93955 20.3649 3.44269 20.7378C4.17461 21.2804 5.02537 21.5217 6.06107 21.6373C6.52998 21.6896 7.05458 21.7176 7.64281 21.7327C7.92681 21.7399 8.06881 21.7435 8.15941 21.6552C8.25 21.5669 8.25 21.4234 8.25 21.1365L8.25 3.86355ZM9.75 21.5532C9.75 21.6619 9.8381 21.75 9.94678 21.75H9.94687H14.0533H14.0534C15.6601 21.75 16.9289 21.75 17.9391 21.6373C18.9748 21.5217 19.8256 21.2804 20.5575 20.7378C21.0606 20.3649 21.4961 19.9032 21.8456 19.3749C22.4908 18.3995 22.6811 17.2169 22.749 15.6541C22.7814 14.9075 22.1524 14.4062 21.5352 14.4062C20.6033 14.4062 19.776 13.5936 19.776 12.5C19.776 11.4064 20.6033 10.5938 21.5352 10.5938C22.1524 10.5938 22.7814 10.0925 22.749 9.3459C22.6811 7.78307 22.4908 6.60053 21.8456 5.62508C21.4961 5.0968 21.0606 4.63512 20.5575 4.26216C19.8256 3.71963 18.9748 3.47828 17.9391 3.36271C16.9289 3.24998 15.6601 3.24999 14.0534 3.25H14.0534H9.94683H9.94682C9.83812 3.25 9.75 3.33812 9.75 3.44683L9.75 21.5532Z"
                    fill="#141B34" />
            </svg>

            <span class="mr-[0.5rem]">بازگشت به درخواست ها</span>
        </a>
    </div>

    <form wire:ignore.self>
        <div
            class="mt-[1rem] bg-white rounded-[1rem] p-[2rem] box-page-create-ticket {{ $ticketStep == 'first' ? '' : 'hidden' }}">
            <div class="flex justify-between items-center border-b border-solid pb-[1rem] mb-[1rem] border-[#BDBDC7]">
                <h3 class="font-semibold">ایجاد درخواست جدید</h3>

                <span class="text-[#0F45FF] font-semibold">1/3</span>
            </div>

            <div wire:ignore.self>
                <div>
                    <h3>موضوع شما در کدام مرحله است؟</h3>
                </div>

                <div class="box-radio-form-product w-full flex my-[1rem]">
                    <input class="!w-[50%] !rounded-[0.5rem]" label="مرحله قبل از ثبت سفارش" type="radio"
                        name="first" wire:model="orderStep" value="{{ \App\Models\Subject::BEFORE_ORDER }}">

                    <input class="!w-[50%] !rounded-[0.5rem]" label="مرحله بعد از ثبت سفارش" type="radio"
                        name="first" wire:model="orderStep" value="{{ \App\Models\Subject::AFTER_ORDER }}">
                </div>

                <div class="flex justify-center">
                    <button wire:click="nextStep('subject')" type="button"
                        class="input-submit-style !rounded-[0.5rem] !w-[15rem]">مرحله بعد</button>
                </div>
            </div>
        </div>

        <div
            class="mt-[1rem] bg-white rounded-[1rem] p-[2rem] box-page-create-ticket {{ $ticketStep == 'subject' ? '' : 'hidden' }}">
            <div class="flex justify-between items-center border-b border-solid pb-[1rem] mb-[1rem] border-[#BDBDC7]">
                <h3 class="font-semibold">ایجاد درخواست جدید</h3>

                <span class="text-[#0F45FF] font-semibold">2/3</span>
            </div>

            <div>
                <div>
                    <h3>موضوع شما در کدام دسته بندی است؟</h3>
                </div>

                @foreach ($subjects as $group)
                    <div class="box-radio-form-product w-full flex my-[0.5rem]" wire:ignore>
                        @foreach ($group as $subject)
                            <input class="!w-[50%]  !rounded-[0.5rem]" label="{{ $subject['title'] }}" type="radio"
                                name="subject" wire:model.defer="ticketSubject" value="{{ $subject['id'] }}">
                        @endforeach

                    </div>
                @endforeach
                <div class="flex justify-center">
                    <button wire:click="nextStep('first')" type="button"
                        class="input-submit-style !rounded-[0.5rem] !w-[15rem] ml-[0.5rem]">مرحله قبل</button>

                    <button wire:click="nextStep('description')" type="button"
                        class="input-submit-style !rounded-[0.5rem] !w-[15rem]">مرحله بعد</button>
                </div>
            </div>
        </div>

        <div
            class="mt-[1rem] bg-white rounded-[1rem] p-[2rem] box-page-create-ticket {{ $ticketStep == 'description' ? '' : 'hidden' }}">
            <div class="flex justify-between items-center border-b border-solid pb-[1rem] mb-[1rem] border-[#BDBDC7]">
                <h3>لطفا با دقت مطالعه کنید</h3>

                <span class="text-[#0F45FF] font-semibold">3/3</span>
            </div>


            <div>
<<<<<<< HEAD
                <div class="max-h-[10rem] min-h-[10rem]  overflow-y-auto">
=======
                <div class="max-h-[15rem] overflow-y-auto">
>>>>>>> main
                    {!! $description ?? '' !!}
                </div>

                <div class="flex items-center mt-[1rem] mb-[1rem] font-semibold text-[14px]">
                    <input type="checkbox" wire:model.defer="acceptBody" id="confirm">

                    <label class="mr-[0.5rem]" for="confirm">متن بالا را مطالعه کردم و متوجه شدم</label>
                </div>
                @error('acceptBody')
<<<<<<< HEAD
                    <small class="text-danger">
                        {{ $message }}
                    </small>
=======
                <small class="text-danger">
                    {{ $message }}
                </small>
>>>>>>> main
                @enderror
                <div class="flex justify-center">
                    <button wire:click="nextStep('subject')" type="button"
                        class="input-submit-style !rounded-[0.5rem] !w-[15rem] ml-[0.5rem]">مرحله قبل</button>

                    <button wire:click="nextStep('form')" type="button"
                        class="input-submit-style !rounded-[0.5rem] !w-[15rem]">مرحله بعد</button>
                </div>
            </div>
        </div>

        <div
            class="mt-[1rem] bg-white rounded-[1rem] p-[2rem] box-page-create-ticket {{ $ticketStep == 'form' ? '' : 'hidden' }}">
            <div class="flex justify-between items-center border-b border-solid pb-[1rem] mb-[1rem] border-[#BDBDC7]">
                <h3 class="font-semibold">ایجاد درخواست جدید</h3>

                <span class="text-[#0F45FF] font-semibold">3/3</span>
            </div>

            <div>
                <div>
                    <input type="text" wire:model.defer="formSubject"
                        class="input-hover w-full bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] p-[1rem]"
                        placeholder="لطفا موضوع خود را در حد چهار کلمه وارد نمایید">
                    @error('formSubject')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                @if ($orderStep == \App\Models\Subject::AFTER_ORDER)
                    <div class="my-[0.5rem]">
                        <input type="text" wire:model.defer="orderId"
                            class="input-hover w-full bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] p-[1rem]"
                            placeholder="کد سفارش">
                        @error('orderId')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="my-[0.5rem]">
                        <input type="text" wire:model.defer="productName"
                            class="input-hover w-full bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] p-[1rem]"
                            placeholder="نام محصولی خریداری شده">
                        @error('productName')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="my-[0.5rem]">
                        <input type="text" wire:model.defer="cardNumber"
                            class="input-hover w-full bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] p-[1rem]"
                            placeholder="شماره کارتی که با ان پرداخت انجام داده اید">
                        @error('cardNumber')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                @endif
                <div class="my-[1rem] text-[14px] text-[#374151] font-semibold">
                    <label for="Importance">میزان اهمیت موضوع شما چه مقدار است؟</label>
                </div>

                <div class="box-radio-form-product w-full my-[0.5rem] grid gap-1 grid-cols-2 lg:grid-cols-4">
                    <input id="Importance" class="!rounded-[0.5rem]" label="کم" type="radio" name="form"
                        value="{{ \App\Models\Ticket::LOW }}" wire:model.defer="priority">
                    <input class="!rounded-[0.5rem]" label="متوسط" type="radio" name="form"
                        value="{{ \App\Models\Ticket::NORMAL }}" wire:model.defer="priority">
                    <input class="!rounded-[0.5rem]" label="زیاد" type="radio" name="form"
                        value="{{ \App\Models\Ticket::HIGH }}" wire:model.defer="priority">
                    <input class="!rounded-[0.5rem]" label="فوری" type="radio" name="form"
                        value="{{ \App\Models\Ticket::NECESSARY }}" wire:model.defer="priority">

                </div>
                @error('priority')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
                <div class="my-[0.5rem]">
                    <textarea class="input-hover w-full bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] p-[1rem] h-[15rem]"
                        wire:model.defer="body" placeholder="لطفا درخواست خود را در قالب یک پیام به صورت کامل بنویسید"></textarea>
                    @error('body')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="flex justify-center mt-[0.5rem]">
                    <button x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress" type="button"
                        class="flex justify-center items-center bg-transparent border-solid !text-[#0F45FF] !border !border-[#0F45FF] input-submit-style !rounded-[0.5rem] !min-h-[2.5rem] !w-[35%]">

                        <input type="file" class="form-control d-none" id="file" wire:model="file" />
                        <div class="mt-2" x-show="isUploading">
                            در حال اپلود
                        </div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.82338 12L4.27922 10.4558C2.57359 8.75022 2.57359 5.98485 4.27922 4.27922C5.98485 2.57359 8.75022 2.57359 10.4558 4.27922L19.7208 13.5442C21.4264 15.2498 21.4264 18.0152 19.7208 19.7208C18.0152 21.4264 15.2498 21.4264 13.5442 19.7208L10.0698 16.2464C9.00379 15.1804 9.00379 13.4521 10.0698 12.386C11.1358 11.32 12.8642 11.32 13.9302 12.386L15.8604 14.3162"
                                stroke="#0F45FF" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

<<<<<<< HEAD
                        <label wire:loading.remove for="file" class="mr-[0.5rem]">پیوست فایل</label>
=======
                        <label wire:loading.remove for="file" class="mr-[0.5rem]">ارسال فایل</label>
>>>>>>> main
                    </button>

                    <button wire:click="submitTicket" type="button"
                        class="input-submit-style !rounded-[0.5rem] !min-h-[2.5rem] mr-[0.5rem] !w-[65%]">ارسال</button>
                </div>
                <div class="flex justify-center items-start mt-[1rem]">
                    <button wire:click="nextStep('subject')" type="button"
                    class="input-submit-style !rounded-[0.5rem] !w-[15rem] mr-[0.5rem]">مرحله قبل</button>
                </div>
                @error('file')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </form>
</div>
