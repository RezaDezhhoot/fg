<section id="right-dashboard">
    <a href="{{ route('home') }}" class="box-exit-dashboard flex-box">
        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.0402 7.32018L14.2802 3.29018C12.7102 2.19018 10.3002 2.25018 8.79023 3.42018L3.78023 7.33018C2.78023 8.11018 1.99023 9.71018 1.99023 10.9702V17.8702C1.99023 20.4202 4.06023 22.5002 6.61023 22.5002H17.3902C19.9402 22.5002 22.0102 20.4302 22.0102 17.8802V11.1002C22.0102 9.75018 21.1402 8.09018 20.0402 7.32018ZM12.7502 18.5002C12.7502 18.9102 12.4102 19.2502 12.0002 19.2502C11.5902 19.2502 11.2502 18.9102 11.2502 18.5002V15.5002C11.2502 15.0902 11.5902 14.7502 12.0002 14.7502C12.4102 14.7502 12.7502 15.0902 12.7502 15.5002V18.5002Z" fill="#292D32"/>
        </svg>

        <span class="mr-2">بازگشت به خانه</span>
    </a>

    <div id="box-menu-dashboard">
        <div class="box-menu-name-dashboard flex-box flex-right">
            <div class="min-w-12 min-h-12">
                <img class="w-12 h-12" src="{{ asset('site/svg/avatar.svg') }}"alt="آواتار">
            </div>

            <div class="flex-box w-full justify-content-start">
                <span class="box-sidbar-user-name-dashboard">{{ auth()->user()->username }}</span>
            </div>
        </div>


        <form>

            <div class="box-point-dashboard flex-box flex-justify-space">
                <div class="flex-box">
                    <div class="box-coin-point-dashboard flex-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22.75C8 22.75 4.75 19.88 4.75 16.35V12.65C4.75 12.24 5.09 11.9 5.5 11.9C5.91 11.9 6.25 12.24 6.25 12.65C6.25 15.27 8.72 17.25 12 17.25C15.28 17.25 17.75 15.27 17.75 12.65C17.75 12.24 18.09 11.9 18.5 11.9C18.91 11.9 19.25 12.24 19.25 12.65V16.35C19.25 19.88 16 22.75 12 22.75ZM6.25 16.46C6.32 19.11 8.87 21.25 12 21.25C15.13 21.25 17.68 19.11 17.75 16.46C16.45 17.87 14.39 18.75 12 18.75C9.61 18.75 7.56 17.87 6.25 16.46Z"
                                fill="#292D32" />
                            <path
                                d="M12 13.75C9.24 13.75 6.75999 12.51 5.54999 10.51C5.02999 9.66 4.75 8.67 4.75 7.65C4.75 5.93 5.52 4.31 6.91 3.09C8.27 1.9 10.08 1.25 12 1.25C13.92 1.25 15.72 1.9 17.09 3.08C18.48 4.31 19.25 5.93 19.25 7.65C19.25 8.67 18.97 9.65 18.45 10.51C17.24 12.51 14.76 13.75 12 13.75ZM12 2.75C10.44 2.75 8.98001 3.27 7.89001 4.23C6.83001 5.15 6.25 6.37 6.25 7.65C6.25 8.4 6.44999 9.1 6.82999 9.73C7.77999 11.29 9.76 12.25 12 12.25C14.24 12.25 16.22 11.28 17.17 9.73C17.56 9.1 17.75 8.4 17.75 7.65C17.75 6.37 17.17 5.15 16.1 4.21C15.01 3.27 13.56 2.75 12 2.75Z"
                                fill="#292D32" />
                            <path
                                d="M12 18.75C7.87 18.75 4.75 16.13 4.75 12.65V7.65C4.75 4.12 8 1.25 12 1.25C13.92 1.25 15.72 1.9 17.09 3.08C18.48 4.31 19.25 5.93 19.25 7.65V12.65C19.25 16.13 16.13 18.75 12 18.75ZM12 2.75C8.83 2.75 6.25 4.95 6.25 7.65V12.65C6.25 15.27 8.72 17.25 12 17.25C15.28 17.25 17.75 15.27 17.75 12.65V7.65C17.75 6.37 17.17 5.15 16.1 4.21C15.01 3.27 13.56 2.75 12 2.75Z"
                                fill="#292D32" />
                        </svg>
                    </div>

                    <div class="box-number-point-dashboard">
                        <span>{{ $score }}</span>

                        <span>امتیاز</span>
                    </div>
                </div>

                <div>
                    <a wire:loading.attr="disabled" wire:click="changeScore()" class="btn-chenge-point-dashboard">تبدیل
                        به
                        پول</a>
                </div>
            </div>

            @error('errorScore')
                <small style="font-size: 0.8rem!important;" class="text-red">{{ $message }}</small>
            @enderror

            @error('successScore')
                <small style="font-size: 0.8rem!important;" class="text-green">{{ $message }}</small>
            @enderror
        </form>

        <div class="box-item-menu-dashboard">
            <ul>
                <a href="{{ route('dashboard') }}">
                    <li
                        class="hover-menu-dashboard flex-box flex-right {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'dashboard' ? ' item-menu-dashboard-active' : '' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="17.75" cy="6.25" r="4.25" stroke="#808191" stroke-width="1.5"/>
                            <circle cx="6.25" cy="6.25" r="4.25" stroke="#808191" stroke-width="1.5"/>
                            <circle cx="17.75" cy="17.75" r="4.25" stroke="#808191" stroke-width="1.5"/>
                            <circle cx="6.25" cy="17.75" r="4.25" stroke="#808191" stroke-width="1.5"/>
                        </svg>

                        <svg class="active hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.25 6C1.25 3.37665 3.37665 1.25 6 1.25C8.62335 1.25 10.75 3.37665 10.75 6C10.75 8.62335 8.62335 10.75 6 10.75C3.37665 10.75 1.25 8.62335 1.25 6Z" fill="white"/>
                            <path d="M1.25 18C1.25 15.3766 3.37665 13.25 6 13.25C8.62335 13.25 10.75 15.3766 10.75 18C10.75 20.6234 8.62335 22.75 6 22.75C3.37665 22.75 1.25 20.6234 1.25 18Z" fill="white"/>
                            <path d="M13.25 18C13.25 15.3766 15.3766 13.25 18 13.25C20.6234 13.25 22.75 15.3766 22.75 18C22.75 20.6234 20.6234 22.75 18 22.75C15.3766 22.75 13.25 20.6234 13.25 18Z" fill="white"/>
                            <path d="M13.25 6C13.25 3.37665 15.3766 1.25 18 1.25C20.6234 1.25 22.75 3.37665 22.75 6C22.75 8.62335 20.6234 10.75 18 10.75C15.3766 10.75 13.25 8.62335 13.25 6Z" fill="white"/>
                        </svg>

                        <span>داشبورد</span>
                    </li>
                </a>

                <a href="{{ route('dashboard.orders') }}">
                    <li
                        class="hover-menu-dashboard flex-box flex-right {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'dashboard.orders' ? ' item-menu-dashboard-active' : '' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.87289 17.0194L2.66933 9.83981C2.48735 8.75428 2.39637 8.21152 2.68773 7.85576C2.9791 7.5 3.51461 7.5 4.58564 7.5L19.4144 7.5C20.4854 7.5 21.0209 7.5 21.3123 7.85576C21.6036 8.21152 21.5126 8.75428 21.3307 9.83981L20.1271 17.0194C19.7282 19.3991 19.5287 20.5889 18.7143 21.2945C17.9 22 16.726 22 14.3782 22L9.62182 22C7.27396 22 6.10003 22 5.28565 21.2945C4.47127 20.5889 4.27181 19.3991 3.87289 17.0194Z" fill="white"/>
                            <path d="M11 22H9.62182C7.27396 22 6.10003 22 5.28565 21.2945C4.47127 20.5889 4.27181 19.3991 3.87289 17.0194L2.66933 9.83981C2.48735 8.75428 2.39637 8.21152 2.68773 7.85576C2.9791 7.5 3.51461 7.5 4.58564 7.5L19.4144 7.5C20.4854 7.5 21.0209 7.5 21.3123 7.85576C21.6036 8.21152 21.5126 8.75428 21.3307 9.83981L20.8009 13" stroke="#808191" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M13.5 20C13.5 20 14.5 20 15.5 22C15.5 22 18.6765 17 21.5 16" stroke="#808191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.5 7.5C17.5 4.46243 15.0376 2 12 2C8.96243 2 6.5 4.46243 6.5 7.5" stroke="#808191" stroke-width="1.5"/>
                        </svg>

                        <svg class="active hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.41043 6.625C3.91822 6.62494 3.46976 6.62489 3.11081 6.67737C2.71615 6.73506 2.29576 6.87305 1.98249 7.25555C1.67264 7.63388 1.61488 8.07216 1.62633 8.47066C1.63691 8.83882 1.71248 9.28939 1.79661 9.79093L3.0162 17.0661C3.20885 18.2154 3.36469 19.1451 3.57912 19.872C3.80192 20.6272 4.11182 21.2531 4.66955 21.7363C5.22955 22.2215 5.88861 22.4322 6.65842 22.5307C7.39491 22.625 8.31534 22.625 9.44649 22.625H12.5662C12.7277 22.625 12.815 22.4307 12.7103 22.3076C12.6863 22.2794 12.6664 22.2732 12.6322 22.2625L12.6277 22.2611C11.6116 21.9431 10.875 20.9957 10.875 19.875C10.875 18.4943 11.9943 17.375 13.375 17.375C13.7877 17.375 14.0945 17.4627 14.2317 17.5019L14.2337 17.5024C14.3908 17.5473 14.5551 17.6057 14.7245 17.6802C14.9634 17.7853 15.0828 17.8378 15.1793 17.816C15.2757 17.7942 15.3532 17.7043 15.5081 17.5246C16.1137 16.822 16.9072 15.9606 17.598 15.3548C18.3975 14.6536 19.404 13.9209 20.5404 13.5184C20.6441 13.4817 20.7486 13.4522 20.8534 13.4297C21.1196 13.3726 21.2526 13.3441 21.3164 13.2774C21.3801 13.2107 21.3987 13.0998 21.4358 12.8782L21.9534 9.7909C22.0375 9.28937 22.1131 8.83881 22.1237 8.47066C22.1351 8.07216 22.0773 7.63388 21.7675 7.25556C21.4542 6.87305 21.0338 6.73506 20.6392 6.67737C20.2802 6.62489 19.8318 6.62494 19.3396 6.625L4.41043 6.625Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.875 3.125C9.66586 3.125 7.875 4.91586 7.875 7.125V7.625C7.875 8.17728 7.42728 8.625 6.875 8.625C6.32272 8.625 5.875 8.17728 5.875 7.625V7.125C5.875 3.81129 8.56129 1.125 11.875 1.125C15.1887 1.125 17.875 3.81129 17.875 7.125V7.625C17.875 8.17728 17.4273 8.625 16.875 8.625C16.3227 8.625 15.875 8.17728 15.875 7.625V7.125C15.875 4.91586 14.0841 3.125 11.875 3.125Z" fill="white"/>
                            <path d="M22.3176 15.5414C22.502 16.062 22.2294 16.6335 21.7088 16.8179C21.1752 17.0069 20.5587 17.4138 19.9057 17.9865C19.263 18.5501 18.6378 19.2271 18.0841 19.8909C17.5322 20.5524 17.0635 21.1861 16.7324 21.6551C16.5672 21.8891 16.307 22.2794 16.2191 22.4115C16.0258 22.7156 15.6837 22.8924 15.3239 22.874C14.9639 22.8555 14.6418 22.6448 14.4806 22.3225C14.0399 21.4411 13.6446 21.0902 13.4453 20.9573C13.361 20.9011 13.304 20.8786 13.2814 20.8709C12.773 20.8237 12.375 20.396 12.375 19.8753C12.375 19.323 12.8227 18.8753 13.375 18.8753C13.5742 18.8753 13.7184 18.9155 13.8216 18.945C14.0295 19.0044 14.2803 19.1103 14.5547 19.2932C14.829 19.4761 15.1166 19.7288 15.4054 20.0747C15.7206 19.6439 16.109 19.1363 16.5483 18.6097C17.1416 17.8985 17.84 17.1379 18.587 16.4828C19.3236 15.8368 20.163 15.2436 21.0412 14.9326C21.5618 14.7483 22.1332 15.0208 22.3176 15.5414Z" fill="white"/>
                        </svg>

                        <span>سفارشات من</span>
                    </li>
                </a>

                <a href="{{ route('dashboard.profile') }}">
                    <li
                        class="hover-menu-dashboard flex-box flex-right {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'dashboard.profile' ? ' item-menu-dashboard-active' : '' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.78256 17.1112C6.68218 17.743 3.79706 19.0331 5.55429 20.6474C6.41269 21.436 7.36872 22 8.57068 22H15.4293C16.6313 22 17.5873 21.436 18.4457 20.6474C20.2029 19.0331 17.3178 17.743 16.2174 17.1112C13.6371 15.6296 10.3629 15.6296 7.78256 17.1112Z" stroke="#808191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.5 10C15.5 11.933 13.933 13.5 12 13.5C10.067 13.5 8.5 11.933 8.5 10C8.5 8.067 10.067 6.5 12 6.5C13.933 6.5 15.5 8.067 15.5 10Z" stroke="#808191" stroke-width="1.5"/>
                            <path d="M2.854 16C2.30501 14.7664 2 13.401 2 11.9646C2 6.46129 6.47715 2 12 2C17.5228 2 22 6.46129 22 11.9646C22 13.401 21.695 14.7664 21.146 16" stroke="#808191" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>

                        <svg class="active hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.9068 16.635C17.4591 16.9351 18.3255 17.406 18.9182 17.9654C19.2872 18.3138 19.669 18.7999 19.7391 19.4182C19.8149 20.0872 19.5068 20.6913 18.9533 21.1997C18.0243 22.0532 16.8947 22.75 15.4295 22.75H8.57089C7.10575 22.75 5.97614 22.0532 5.04711 21.1997C4.49363 20.6913 4.18554 20.0872 4.26137 19.4182C4.33146 18.7999 4.7132 18.3138 5.08224 17.9654C5.67492 17.406 6.54126 16.9352 7.09358 16.635C7.21655 16.5682 7.32397 16.5098 7.40932 16.4608C10.2209 14.8464 13.7795 14.8464 16.5911 16.4608C16.6764 16.5098 16.7838 16.5681 16.9068 16.635Z" fill="white"/>
                            <path d="M7.75021 10C7.75021 7.65279 9.653 5.75 12.0002 5.75C14.3474 5.75 16.2502 7.65279 16.2502 10C16.2502 12.3472 14.3474 14.25 12.0002 14.25C9.653 14.25 7.75021 12.3472 7.75021 10Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.18747C7.13913 3.18747 3.20455 7.07879 3.20455 11.8718C3.20455 13.1249 3.47275 14.3136 3.95472 15.3872C4.17416 15.876 3.95232 16.4485 3.45921 16.6661C2.9661 16.8836 2.38846 16.6637 2.16902 16.1749C1.57794 14.8583 1.25 13.4016 1.25 11.8718C1.25 6.00228 6.06621 1.25 12 1.25C17.9338 1.25 22.75 6.00228 22.75 11.8718C22.75 13.4016 22.4221 14.8583 21.831 16.1749C21.6115 16.6637 21.0339 16.8836 20.5408 16.6661C20.0477 16.4485 19.8258 15.876 20.0453 15.3872C20.5273 14.3136 20.7955 13.1249 20.7955 11.8718C20.7955 7.07879 16.8609 3.18747 12 3.18747Z" fill="white"/>
                        </svg>

                        <span>پروفایل</span>
                    </li>
                </a>

                <a href="{{ route('dashboard.comments') }}">
                    <li
                        class="hover-menu-dashboard flex-box flex-right {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'dashboard.comments' ? ' item-menu-dashboard-active' : '' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 13.5H16M8 8.5H12" stroke="#808191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.09881 19C4.7987 18.8721 3.82475 18.4816 3.17157 17.8284C2 16.6569 2 14.7712 2 11V10.5C2 6.72876 2 4.84315 3.17157 3.67157C4.34315 2.5 6.22876 2.5 10 2.5H14C17.7712 2.5 19.6569 2.5 20.8284 3.67157C22 4.84315 22 6.72876 22 10.5V11C22 14.7712 22 16.6569 20.8284 17.8284C19.6569 19 17.7712 19 14 19C13.4395 19.0125 12.9931 19.0551 12.5546 19.155C11.3562 19.4309 10.2465 20.0441 9.14987 20.5789C7.58729 21.3408 6.806 21.7218 6.31569 21.3651C5.37769 20.6665 6.29454 18.5019 6.5 17.5" stroke="#808191" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>

                        <svg class="active hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.15 1.75H9.85C5.79592 1.75 3.76888 1.75 2.50944 3.01407C1.25 4.27813 1.25 6.31261 1.25 10.3816V10.9211C1.25 14.99 1.25 17.0245 2.50944 18.2886C3.09038 18.8716 3.90736 19.2607 4.96365 19.4558C5.28808 19.5158 5.45029 19.5457 5.52074 19.6474C5.5912 19.7492 5.56226 19.9112 5.5044 20.2351C5.36431 21.0194 5.38644 21.7285 5.88937 22.1045C6.41645 22.4893 7.25633 22.0782 8.93611 21.2562C9.12216 21.1651 9.30888 21.0718 9.49596 20.9783L9.49881 20.9768C10.4961 20.4783 11.5124 19.9703 12.5962 19.7199C13.0676 19.6121 13.5475 19.5661 14.15 19.5526C18.2041 19.5526 20.2311 19.5526 21.4906 18.2886C22.75 17.0245 22.75 14.99 22.75 10.9211V10.3816C22.75 6.31261 22.75 4.27813 21.4906 3.01407C20.2311 1.75 18.2041 1.75 14.15 1.75ZM16.75 13.5C16.75 13.9142 16.4142 14.25 16 14.25H8C7.58579 14.25 7.25 13.9142 7.25 13.5C7.25 13.0858 7.58579 12.75 8 12.75H16C16.4142 12.75 16.75 13.0858 16.75 13.5ZM12.75 8.5C12.75 8.91421 12.4142 9.25 12 9.25H8C7.58579 9.25 7.25 8.91421 7.25 8.5C7.25 8.08579 7.58579 7.75 8 7.75H12C12.4142 7.75 12.75 8.08579 12.75 8.5Z" fill="white"/>
                        </svg>

                        <span>نظرات من</span>
                    </li>
                </a>

                <a href="{{ route('dashboard.notifications') }}">
                    <li
                        class="hover-menu-dashboard flex-box flex-right {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'dashboard.notifications' ? ' item-menu-dashboard-active' : '' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0206 2.91016C8.71058 2.91016 6.02058 5.60016 6.02058 8.91016V11.8002C6.02058 12.4102 5.76058 13.3402 5.45058 13.8602L4.30058 15.7702C3.59058 16.9502 4.08058 18.2602 5.38058 18.7002C9.69058 20.1402 14.3406 20.1402 18.6506 18.7002C19.8606 18.3002 20.3906 16.8702 19.7306 15.7702L18.5806 13.8602C18.2806 13.3402 18.0206 12.4102 18.0206 11.8002V8.91016C18.0206 5.61016 15.3206 2.91016 12.0206 2.91016Z" stroke="#808191" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path d="M13.8699 3.20043C13.5599 3.11043 13.2399 3.04043 12.9099 3.00043C11.9499 2.88043 11.0299 2.95043 10.1699 3.20043C10.4599 2.46043 11.1799 1.94043 12.0199 1.94043C12.8599 1.94043 13.5799 2.46043 13.8699 3.20043Z" stroke="#808191" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.0195 19.0596C15.0195 20.7096 13.6695 22.0596 12.0195 22.0596C11.1995 22.0596 10.4395 21.7196 9.89953 21.1796C9.35953 20.6396 9.01953 19.8796 9.01953 19.0596" stroke="#808191" stroke-width="1.5" stroke-miterlimit="10"/>
                        </svg>

                        <svg class="active hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.9116 14.748L18.913 14.7502C19.2233 15.2594 19.2775 15.8584 19.0721 16.4037C18.8637 16.9566 18.4355 17.3737 17.8839 17.555L17.8839 17.555L17.8811 17.5559C15.9942 18.1881 14.0079 18.5 12.0199 18.5C10.032 18.5 8.04657 18.1881 6.16098 17.5466L6.15998 17.5463C5.54292 17.3378 5.10185 16.9172 4.92065 16.4114L4.92067 16.4114L4.91923 16.4075C4.7272 15.8851 4.78757 15.3026 5.11856 14.7475C5.11879 14.7471 5.11902 14.7467 5.11925 14.7463L6.12778 13.0788L6.12784 13.0788L6.13183 13.0719C6.2675 12.8394 6.38148 12.5281 6.46118 12.2349C6.54078 11.9422 6.59994 11.6169 6.59994 11.35V8.82C6.59994 6.69904 7.83406 4.85737 9.62263 3.96767L9.76096 3.89886L9.83636 3.76402C10.2692 2.98983 11.0836 2.5 11.9899 2.5C12.9106 2.5 13.7038 2.97374 14.1347 3.73603L14.2122 3.87329L14.3545 3.94122C16.1781 4.81178 17.4399 6.67082 17.4399 8.82V11.35C17.4399 11.6169 17.4991 11.9421 17.5786 12.2356C17.6583 12.5303 17.7717 12.8417 17.9051 13.0768L17.905 13.0769L17.9117 13.088L18.9116 14.748Z" fill="white" stroke="white"/>
                            <path d="M10.0952 20.6143C10.1457 20.6193 10.1963 20.6239 10.2471 20.6282C10.8286 20.6792 11.423 20.71 12.0197 20.71C12.607 20.71 13.1921 20.6791 13.7642 20.628L13.7642 20.628L13.7671 20.6277C13.8101 20.6237 13.8577 20.6197 13.9083 20.6156C13.4471 21.1572 12.7618 21.5 11.9997 21.5C11.3408 21.5 10.6921 21.2319 10.2395 20.7628L10.2308 20.7538L10.2217 20.7452C10.1779 20.7042 10.1357 20.6604 10.0952 20.6143Z" fill="white" stroke="white"/>
                        </svg>

                        <span>اعلانات</span>
                    </li>
                </a>

                <a href="{{ route('dashboard.tickets') }}">
                    <li
                        class="hover-menu-dashboard flex-box flex-right {{ request()->routeIs(['dashboard.tickets','dashboard.tickets.show']) ? ' item-menu-dashboard-active' : '' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.46433 9.34375C2.21579 9.34375 1.98899 9.14229 2.00041 8.87895C2.06733 7.33687 2.25481 6.33298 2.78008 5.53884C3.08228 5.08196 3.45765 4.68459 3.88923 4.36468C5.05575 3.5 6.70139 3.5 9.99266 3.5H14.0074C17.2986 3.5 18.9443 3.5 20.1108 4.36468C20.5424 4.68459 20.9177 5.08196 21.2199 5.53884C21.7452 6.33289 21.9327 7.33665 21.9996 8.87843C22.011 9.14208 21.7839 9.34375 21.5351 9.34375C20.1493 9.34375 19.0259 10.533 19.0259 12C19.0259 13.467 20.1493 14.6562 21.5351 14.6562C21.7839 14.6562 22.011 14.8579 21.9996 15.1216C21.9327 16.6634 21.7452 17.6671 21.2199 18.4612C20.9177 18.918 20.5424 19.3154 20.1108 19.6353C18.9443 20.5 17.2986 20.5 14.0074 20.5H9.99266C6.70139 20.5 5.05575 20.5 3.88923 19.6353C3.45765 19.3154 3.08228 18.918 2.78008 18.4612C2.25481 17.667 2.06733 16.6631 2.00041 15.1211C1.98899 14.8577 2.21579 14.6562 2.46433 14.6562C3.85012 14.6562 4.97352 13.467 4.97352 12C4.97352 10.533 3.85012 9.34375 2.46433 9.34375Z" stroke="#808191" stroke-width="1.5" stroke-linejoin="round"/>
                            <path d="M9 3.5L9 20.5" stroke="#808191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <svg class="active hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.25 3.36355C8.25 3.07656 8.25 2.93307 8.15941 2.84476C8.06881 2.75645 7.92681 2.76008 7.64281 2.76733C7.05458 2.78235 6.52998 2.81039 6.06107 2.86271C5.02537 2.97828 4.17461 3.21963 3.44269 3.76216C2.93954 4.13512 2.50404 4.5968 2.15462 5.12508C1.50935 6.10064 1.31903 7.28333 1.2512 8.84643C1.21882 9.5926 1.84739 10.0938 2.46441 10.0938C3.39631 10.0938 4.2236 10.9064 4.2236 12C4.2236 13.0936 3.39631 13.9062 2.46441 13.9062C1.84739 13.9062 1.21882 14.4074 1.2512 15.1536C1.31903 16.7167 1.50935 17.8994 2.15462 18.8749C2.50404 19.4032 2.93955 19.8649 3.44269 20.2378C4.17461 20.7804 5.02537 21.0217 6.06107 21.1373C6.52998 21.1896 7.05458 21.2176 7.64281 21.2327C7.92681 21.2399 8.06881 21.2435 8.15941 21.1552C8.25 21.0669 8.25 20.9234 8.25 20.6364L8.25 3.36355ZM9.75 21.0532C9.75 21.1619 9.8381 21.25 9.94678 21.25H9.94687H14.0533H14.0534C15.6601 21.25 16.9289 21.25 17.9391 21.1373C18.9748 21.0217 19.8256 20.7804 20.5575 20.2378C21.0606 19.8649 21.4961 19.4032 21.8456 18.8749C22.4908 17.8995 22.6811 16.7169 22.749 15.1541C22.7814 14.4075 22.1524 13.9062 21.5352 13.9062C20.6033 13.9062 19.776 13.0936 19.776 12C19.776 10.9064 20.6033 10.0938 21.5352 10.0938C22.1524 10.0938 22.7814 9.59249 22.749 8.8459C22.6811 7.28307 22.4908 6.10053 21.8456 5.12508C21.4961 4.5968 21.0606 4.13512 20.5575 3.76216C19.8256 3.21963 18.9748 2.97828 17.9391 2.86271C16.9289 2.74998 15.6601 2.74999 14.0534 2.75H14.0534H9.94683H9.94682C9.83812 2.75 9.75 2.83812 9.75 2.94683L9.75 21.0532Z" fill="white"/>
                        </svg>

                        <span>تیکت ها</span>
                    </li>
                </a>

                @if (auth()->user()->hasRole('همکار'))
                    <a href="{{ route('partner.orders') }}">
                        <li class="hover-menu-dashboard flex-box flex-right">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97998C3 3.33998 4.34 2.01001 6 2.01001H18C19.66 2.01001 21 3.33998 21 4.97998V15.89C21 17.52 19.66 18.86 18 18.86Z"
                                    stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M11.9999 10.0001C13.2868 10.0001 14.33 8.95687 14.33 7.67004C14.33 6.38322 13.2868 5.34009 11.9999 5.34009C10.7131 5.34009 9.66992 6.38322 9.66992 7.67004C9.66992 8.95687 10.7131 10.0001 11.9999 10.0001Z"
                                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M16 15.6601C16 13.8601 14.21 12.4001 12 12.4001C9.79 12.4001 8 13.8601 8 15.6601"
                                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <span>پنل همکاری</span>
                        </li>
                    </a>
                @endif

                <div class="boarder-exit-dashboard"></div>

                <a href="{{ route('logout') }}">
                    <li class="flex-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 3.09502C13.543 3.03241 13.0755 3 12.6 3C7.29807 3 3 7.02944 3 12C3 16.9706 7.29807 21 12.6 21C13.0755 21 13.543 20.9676 14 20.905" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M21 12L11 12M21 12C21 11.2998 19.0057 9.99153 18.5 9.5M21 12C21 12.7002 19.0057 14.0085 18.5 14.5" stroke="#808191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <span>خروج از حساب</span>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</section>