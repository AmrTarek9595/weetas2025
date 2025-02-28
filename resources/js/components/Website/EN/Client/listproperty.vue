<template>
    <main id="primary" class="site-main">
      <section class="search-section py-5">
        <div class="container py-3">
          <div class="row">
            <div class="col-12 align-items-center justify-content-center">
              <h1 class="search-heading mt-2 mb-4 pb-2 text-center">Search the best listed properties in Bahrain</h1>
            </div>
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
              <form id="seaech-form" action="#">
                <div class="search-tabs">
                  <ul class="list-unstyled d-flex flex-wrap">
                    <li data-id="sale" class="p-2 px-4 active">
                      <span>Buy</span>
                    </li>
                    <li data-id="rent" class="p-2 px-4 ">
                      <span>Rent</span>
                    </li>
                  </ul>
                </div>
                <div class="search-content p-4">
                  <div id="search-btype" class="types">
                    <ul class="list-unstyled d-flex flex-wrap">
                      <li class="d-flex active align-items-center me-4 mb-2" data-id="all">
                        <span class="icon me-1 d-flex align-items-center justify-content-center">
                          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="All" clip-path="url(#clip0_1047_2907)">
                              <path id="Vector" d="M2.45034 17.4994H15.0504C15.2782 17.4981 15.5022 17.44 15.702 17.3303C15.9017 17.2207 16.071 17.0629 16.1944 16.8713C16.3179 16.6798 16.3916 16.4605 16.4089 16.2332C16.4262 16.006 16.3866 15.778 16.2936 15.57L14.1585 10.9409C14.0488 10.7041 13.8738 10.5034 13.6539 10.3627C13.4341 10.222 13.1786 10.147 12.9176 10.1466C13.8869 8.80619 14.4269 7.20328 14.4661 5.54959C14.4661 2.48951 11.9021 0 8.75034 0C5.59859 0 3.03459 2.48951 3.03459 5.5496C3.073 7.20442 3.61538 8.80814 4.58928 10.1466C4.32735 10.1461 4.07075 10.2205 3.84981 10.3612C3.62886 10.5019 3.45282 10.7029 3.34248 10.9404L1.20678 15.5709C1.11396 15.779 1.07448 16.0068 1.0919 16.234C1.10932 16.4611 1.1831 16.6803 1.30655 16.8718C1.43 17.0632 1.59924 17.2209 1.79895 17.3305C1.99866 17.4401 2.22254 17.4981 2.45034 17.4994ZM8.75034 1.08931C11.2989 1.08931 13.3723 3.09014 13.3723 5.5496C13.3723 9.21963 9.80537 12.011 8.75034 12.7562C7.69531 12.011 4.12834 9.21963 4.12834 5.5496C4.12834 3.09014 6.20182 1.08931 8.75034 1.08931ZM2.20093 16.0248L4.33662 11.3947C4.35796 11.3472 4.39259 11.3069 4.43634 11.2788C4.48008 11.2506 4.53106 11.2357 4.58309 11.2359H5.43291C6.31713 12.2499 7.33579 13.1382 8.46062 13.8763C8.54756 13.9305 8.64793 13.9591 8.75034 13.9591C8.85276 13.9591 8.95313 13.9305 9.04007 13.8763C10.1649 13.1382 11.1836 12.2499 12.0678 11.2359H12.9176C12.9697 11.2357 13.0208 11.2507 13.0646 11.279C13.1084 11.3072 13.143 11.3476 13.1643 11.3952L15.2995 16.0238C15.3655 16.2502 15.285 16.3762 15.0504 16.4101H2.45034C2.21622 16.3765 2.1352 16.2501 2.20093 16.0248Z" fill="#F17B4C" />
                              <path id="Vector_2" d="M10.3909 8.23822C10.536 8.23821 10.6751 8.18059 10.7776 8.07803C10.8802 7.97548 10.9378 7.83638 10.9378 7.69134V5.78856L11.1712 5.95192C11.2901 6.03253 11.4359 6.06312 11.5772 6.03708C11.7185 6.01104 11.8439 5.93046 11.9262 5.81275C12.0086 5.69504 12.0413 5.54965 12.0173 5.408C11.9934 5.26636 11.9146 5.13983 11.7981 5.05575L9.0638 3.14171C8.97189 3.07744 8.86245 3.04297 8.7503 3.04297C8.63815 3.04297 8.52871 3.07744 8.4368 3.14171L5.70243 5.05577C5.58594 5.13984 5.50721 5.26638 5.48325 5.40802C5.45929 5.54967 5.49202 5.69506 5.57438 5.81277C5.65674 5.93048 5.7821 6.01106 5.92338 6.03709C6.06466 6.06312 6.21052 6.03252 6.32942 5.9519L6.5628 5.78856V7.69134C6.56281 7.83638 6.62043 7.97548 6.72298 8.07803C6.82554 8.18059 6.96464 8.23821 7.10967 8.23822H10.3909ZM8.7503 4.25735L9.84405 5.02296V7.14447H7.65655V5.02296L8.7503 4.25735Z" fill="#F17B4C" />
                              <path id="Vector_3" d="M8.75031 8.78522C8.60658 8.7872 8.4694 8.84569 8.36846 8.94804C8.26752 9.05038 8.21093 9.18836 8.21094 9.3321C8.21094 9.47585 8.26754 9.61382 8.36848 9.71616C8.46943 9.8185 8.6066 9.87699 8.75034 9.87897C8.89407 9.87698 9.03125 9.81849 9.13219 9.71614C9.23313 9.6138 9.28972 9.47583 9.28972 9.33208C9.28971 9.18833 9.23312 9.05036 9.13217 8.94802C9.03123 8.84568 8.89405 8.7872 8.75031 8.78522Z" fill="#F17B4C" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1047_2907">
                                <rect width="17.5" height="17.5" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <p class="mb-0">All</p>
                      </li>
                      <li class="d-flex  align-items-center me-4 mb-2" data-id="apartments">
                        <span class="icon me-1 d-flex align-items-center justify-content-center">
                          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Apartment" clip-path="url(#clip0_1047_2915)">
                              <path id="Vector" d="M16.8084 6.49719L14.0778 4.22344V2.39062C14.0778 2.24973 14.0218 2.1146 13.9222 2.01497C13.8226 1.91535 13.6875 1.85937 13.5466 1.85937C13.4057 1.85937 13.2705 1.91535 13.1709 2.01497C13.0713 2.1146 13.0153 2.24973 13.0153 2.39062V3.33625L9.51969 0.425C9.23331 0.186469 8.87239 0.0558472 8.49969 0.0558472C8.12699 0.0558472 7.76607 0.186469 7.47969 0.425L0.190939 6.49719C0.0824485 6.58736 0.0142232 6.71694 0.00127143 6.85742C-0.0116803 6.99789 0.0317025 7.13776 0.121876 7.24625C0.21205 7.35474 0.341628 7.42297 0.482104 7.43592C0.622581 7.44887 0.762449 7.40549 0.870939 7.31531L8.15969 1.24047C8.25515 1.16096 8.37545 1.11742 8.49969 1.11742C8.62393 1.11742 8.74423 1.16096 8.83969 1.24047L14.8747 6.26875V15.4063C14.8747 15.5471 14.8187 15.6823 14.7191 15.7819C14.6195 15.8815 14.4843 15.9375 14.3434 15.9375H11.6872V10.0938C11.6872 9.67106 11.5193 9.26569 11.2204 8.9668C10.9215 8.66791 10.5161 8.5 10.0934 8.5H6.90594C6.48325 8.5 6.07787 8.66791 5.77899 8.9668C5.4801 9.26569 5.31219 9.67106 5.31219 10.0938V15.9375H2.65594C2.51504 15.9375 2.37992 15.8815 2.28029 15.7819C2.18066 15.6823 2.12469 15.5471 2.12469 15.4063V6.24219C2.12469 6.10129 2.06872 5.96617 1.96909 5.86654C1.86946 5.76691 1.73434 5.71094 1.59344 5.71094C1.45254 5.71094 1.31742 5.76691 1.21779 5.86654C1.11816 5.96617 1.06219 6.10129 1.06219 6.24219V15.4063C1.06219 15.8289 1.2301 16.2343 1.52899 16.5332C1.82787 16.8321 2.23325 17 2.65594 17H14.3434C14.7661 17 15.1715 16.8321 15.4704 16.5332C15.7693 16.2343 15.9372 15.8289 15.9372 15.4063V7.15594L16.1284 7.31531C16.224 7.39451 16.3443 7.43774 16.4684 7.4375C16.5778 7.43772 16.6846 7.40415 16.7742 7.3414C16.8638 7.27865 16.9319 7.18977 16.9691 7.0869C17.0063 6.98402 17.0108 6.87217 16.9821 6.76663C16.9533 6.66108 16.8927 6.56698 16.8084 6.49719ZM6.37469 15.9375V10.0938C6.37469 9.95285 6.43066 9.81773 6.53029 9.7181C6.62992 9.61847 6.76504 9.5625 6.90594 9.5625H10.0934C10.2343 9.5625 10.3695 9.61847 10.4691 9.7181C10.5687 9.81773 10.6247 9.95285 10.6247 10.0938V15.9375H6.37469Z" fill="#F8DED4" />
                              <path id="Vector_2" d="M7.96875 13.2812C8.26215 13.2812 8.5 13.0434 8.5 12.75C8.5 12.4566 8.26215 12.2188 7.96875 12.2188C7.67535 12.2188 7.4375 12.4566 7.4375 12.75C7.4375 13.0434 7.67535 13.2812 7.96875 13.2812Z" fill="#F8DED4" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1047_2915">
                                <rect width="17" height="17" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <p class="mb-0">Apartment</p>
                      </li>
                      <li class="d-flex  align-items-center me-4 mb-2" data-id="buildings">
                        <span class="icon me-1 d-flex align-items-center justify-content-center">
                          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Buildings" clip-path="url(#clip0_1047_2922)">
                              <path id="Vector" d="M6.5625 7.24609C6.86453 7.24609 7.10938 7.00125 7.10938 6.69922C7.10938 6.39719 6.86453 6.15234 6.5625 6.15234C6.26047 6.15234 6.01562 6.39719 6.01562 6.69922C6.01562 7.00125 6.26047 7.24609 6.5625 7.24609Z" fill="#F17B4C" />
                              <path id="Vector_2" d="M6.5625 5.05859C6.86453 5.05859 7.10938 4.81375 7.10938 4.51172C7.10938 4.20969 6.86453 3.96484 6.5625 3.96484C6.26047 3.96484 6.01562 4.20969 6.01562 4.51172C6.01562 4.81375 6.26047 5.05859 6.5625 5.05859Z" fill="#F17B4C" />
                              <path id="Vector_3" d="M6.5625 9.43359C6.86453 9.43359 7.10938 9.18875 7.10938 8.88672C7.10938 8.58469 6.86453 8.33984 6.5625 8.33984C6.26047 8.33984 6.01562 8.58469 6.01562 8.88672C6.01562 9.18875 6.26047 9.43359 6.5625 9.43359Z" fill="#F17B4C" />
                              <path id="Vector_4" d="M8.75 5.05859C9.05203 5.05859 9.29688 4.81375 9.29688 4.51172C9.29688 4.20969 9.05203 3.96484 8.75 3.96484C8.44797 3.96484 8.20312 4.20969 8.20312 4.51172C8.20312 4.81375 8.44797 5.05859 8.75 5.05859Z" fill="#F17B4C" />
                              <path id="Vector_5" d="M8.75 7.24609C9.05203 7.24609 9.29688 7.00125 9.29688 6.69922C9.29688 6.39719 9.05203 6.15234 8.75 6.15234C8.44797 6.15234 8.20312 6.39719 8.20312 6.69922C8.20312 7.00125 8.44797 7.24609 8.75 7.24609Z" fill="#F17B4C" />
                              <path id="Vector_6" d="M8.75 9.43359C9.05203 9.43359 9.29688 9.18875 9.29688 8.88672C9.29688 8.58469 9.05203 8.33984 8.75 8.33984C8.44797 8.33984 8.20312 8.58469 8.20312 8.88672C8.20312 9.18875 8.44797 9.43359 8.75 9.43359Z" fill="#F17B4C" />
                              <path id="Vector_7" d="M10.9375 9.43359C11.2395 9.43359 11.4844 9.18875 11.4844 8.88672C11.4844 8.58469 11.2395 8.33984 10.9375 8.33984C10.6355 8.33984 10.3906 8.58469 10.3906 8.88672C10.3906 9.18875 10.6355 9.43359 10.9375 9.43359Z" fill="#F17B4C" />
                              <path id="Vector_8" d="M10.9375 7.24609C11.2395 7.24609 11.4844 7.00125 11.4844 6.69922C11.4844 6.39719 11.2395 6.15234 10.9375 6.15234C10.6355 6.15234 10.3906 6.39719 10.3906 6.69922C10.3906 7.00125 10.6355 7.24609 10.9375 7.24609Z" fill="#F17B4C" />
                              <path id="Vector_9" d="M10.9375 5.05859C11.2395 5.05859 11.4844 4.81375 11.4844 4.51172C11.4844 4.20969 11.2395 3.96484 10.9375 3.96484C10.6355 3.96484 10.3906 4.20969 10.3906 4.51172C10.3906 4.81375 10.6355 5.05859 10.9375 5.05859Z" fill="#F17B4C" />
                              <path id="Vector_10" d="M16.9531 15.4492H15.0391V13.7563C15.6018 13.6531 16.1234 13.3912 16.5424 13.0015C16.9613 12.6118 17.2602 12.1105 17.4038 11.5566C17.5475 11.0028 17.5299 10.4194 17.3532 9.87521C17.1764 9.33101 16.8479 8.84863 16.4062 8.48486V5.0586C16.5513 5.0586 16.6904 5.00098 16.7929 4.89842C16.8955 4.79586 16.9531 4.65676 16.9531 4.51172C16.9531 4.36668 16.8955 4.22758 16.7929 4.12502C16.6904 4.02246 16.5513 3.96485 16.4062 3.96485H13.6719V2.03144C13.8007 1.99839 13.913 1.91943 13.9878 1.8094C14.0625 1.69937 14.0945 1.56584 14.0777 1.4339C14.0609 1.30196 13.9965 1.18069 13.8966 1.09288C13.7967 1.00507 13.6682 0.956762 13.5352 0.957032H3.96484C3.83184 0.956762 3.70331 1.00507 3.60342 1.09288C3.50352 1.18069 3.43913 1.30196 3.42234 1.4339C3.40555 1.56584 3.43752 1.69937 3.51224 1.8094C3.58696 1.91943 3.69929 1.99839 3.82812 2.03144V3.96485H1.09375C0.94871 3.96485 0.80961 4.02246 0.707051 4.12502C0.604492 4.22758 0.546875 4.36668 0.546875 4.51172C0.546875 4.65676 0.604492 4.79586 0.707051 4.89842C0.80961 5.00098 0.94871 5.0586 1.09375 5.0586V15.4492H0.546875C0.401835 15.4492 0.262735 15.5068 0.160176 15.6094C0.057617 15.712 0 15.8511 0 15.9961C0 16.1411 0.057617 16.2802 0.160176 16.3828C0.262735 16.4854 0.401835 16.543 0.546875 16.543H16.9531C17.0982 16.543 17.2373 16.4854 17.3398 16.3828C17.4424 16.2802 17.5 16.1411 17.5 15.9961C17.5 15.8511 17.4424 15.712 17.3398 15.6094C17.2373 15.5068 17.0982 15.4492 16.9531 15.4492ZM3.82812 15.4492H2.1875V5.0586H3.82812V15.4492ZM9.84375 15.4492H7.65625V12.7148H9.84375V15.4492ZM13.9453 15.4492H10.9375V12.168C10.9375 12.0229 10.8799 11.8838 10.7773 11.7813C10.6748 11.6787 10.5357 11.6211 10.3906 11.6211H7.10938C6.96434 11.6211 6.82524 11.6787 6.72268 11.7813C6.62013 11.8838 6.56251 12.0229 6.5625 12.168V15.4492H4.92188V2.05078H12.5781V6.97266C12.5781 7.1177 12.6357 7.2568 12.7383 7.35936C12.8409 7.46192 12.98 7.51953 13.125 7.51953C13.27 7.51953 13.4091 7.46192 13.5117 7.35936C13.6143 7.2568 13.6719 7.1177 13.6719 6.97266V5.0586H15.3125V7.90958C14.9213 7.7983 14.5116 7.76756 14.1082 7.81924C13.7048 7.87092 13.3161 8.00393 12.9656 8.21022C12.6151 8.41651 12.3101 8.6918 12.0691 9.0194C11.828 9.34701 11.656 9.72012 11.5634 10.1161C11.4708 10.5122 11.4596 10.9229 11.5303 11.3234C11.6011 11.7239 11.7524 12.1059 11.975 12.4462C12.1977 12.7865 12.4872 13.0781 12.8258 13.3033C13.1645 13.5285 13.5453 13.6826 13.9453 13.7563V15.4492ZM14.4922 11.6211C14.3471 11.6211 14.2081 11.6787 14.1055 11.7813C14.0029 11.8838 13.9453 12.0229 13.9453 12.168V12.6342C13.5047 12.5029 13.1261 12.2173 12.8788 11.8297C12.6314 11.4422 12.5318 10.9786 12.5982 10.5236C12.6646 10.0687 12.8925 9.65281 13.2402 9.35209C13.588 9.05137 14.0324 8.88588 14.4922 8.88588C14.952 8.88588 15.3964 9.05137 15.7441 9.35209C16.0919 9.65281 16.3198 10.0687 16.3862 10.5236C16.4526 10.9786 16.353 11.4422 16.1056 11.8297C15.8583 12.2173 15.4797 12.5029 15.0391 12.6342V12.168C15.0391 12.0229 14.9814 11.8838 14.8789 11.7813C14.7763 11.6787 14.6372 11.6211 14.4922 11.6211Z" fill="#F17B4C" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1047_2922">
                                <rect width="17.5" height="17.5" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <p class="mb-0">Buildings</p>
                      </li>
                      <li class="d-flex  align-items-center me-4 mb-2" data-id="lands">
                        <span class="icon me-1 d-flex align-items-center justify-content-center">
                          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Eco House 1" clip-path="url(#clip0_1047_2937)">
                              <g id="Layer 1">
                                <path id="Vector" d="M5.48747 16.4026H2.7441C2.44095 16.4026 2.19542 16.1571 2.19542 15.854V6.40029C2.19542 6.09715 1.94989 5.85162 1.64674 5.85162C1.3436 5.85162 1.09807 6.09715 1.09807 6.40029V15.854C1.09807 16.7631 1.83501 17.5 2.7441 17.5H14.815C15.724 17.5 16.461 16.7631 16.461 15.854V7.33304L16.6585 7.49764C16.7573 7.5796 16.8814 7.62418 17.0097 7.62384C17.3128 7.62453 17.5587 7.37934 17.5594 7.07619C17.5594 6.91228 17.487 6.75728 17.3608 6.65269L14.5406 4.30435V2.41142C14.5406 2.10828 14.2951 1.86275 13.9919 1.86275C13.6888 1.86275 13.4433 2.10828 13.4433 2.41142V3.38807L9.83298 0.381326C9.22258 -0.126885 8.33647 -0.126885 7.72607 0.381326L0.198242 6.65269C-0.0349452 6.84678 -0.0671799 7.19313 0.126914 7.42632C0.321008 7.6595 0.667359 7.69174 0.900546 7.49764L8.42837 1.22354C8.63173 1.05414 8.92732 1.05414 9.13068 1.22354L15.3636 6.41675V15.854C15.3636 16.1571 15.1181 16.4026 14.815 16.4026H12.0716M10.9742 16.4026H6.58482H10.9742Z" fill="#F17B4C" />
                                <path id="Vector_2" d="M12.417 6.60091C12.3065 6.49049 12.1519 6.4363 11.9969 6.45345C10.7459 6.59131 7.57388 7.07963 6.59792 8.05558C5.51874 9.13476 5.40832 10.8209 6.26494 12.0252L5.1429 13.1473C4.94195 13.3482 4.94195 13.6737 5.1429 13.8746C5.34385 14.0756 5.66929 14.0756 5.87024 13.8746L6.99228 12.7526C8.20348 13.6147 9.88791 13.494 10.9619 12.42C11.9365 11.4454 12.4269 8.26888 12.5644 7.02099C12.5816 6.86599 12.5274 6.71133 12.417 6.60091ZM10.235 11.6926C9.55837 12.3692 8.52377 12.4752 7.73505 12.0102L9.94827 9.79694C10.1492 9.59599 10.1492 9.27056 9.94827 9.0696C9.74732 8.86865 9.42188 8.86865 9.22093 9.0696L7.00771 11.2828C6.54305 10.4941 6.64867 9.45951 7.32526 8.78292C7.87873 8.22944 9.93661 7.77782 11.4588 7.55903C11.2404 9.08058 10.7888 11.1385 10.2346 11.6926H10.235Z" fill="#F17B4C" />
                              </g>
                            </g>
                            <defs>
                              <clipPath id="clip0_1047_2937">
                                <rect width="17.5593" height="17.5" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <p class="mb-0">Lands</p>
                      </li>
                      <li class="d-flex  align-items-center me-4 mb-2" data-id="office-spaces">
                        <span class="icon me-1 d-flex align-items-center justify-content-center">
                          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Office Spaces" clip-path="url(#clip0_1047_2945)">
                              <path id="Vector" d="M15.75 1.26562C15.75 1.11644 15.6907 0.973373 15.5852 0.867886C15.4798 0.762398 15.3367 0.703132 15.1875 0.703125H7.03125C6.88207 0.703132 6.739 0.762398 6.63351 0.867886C6.52802 0.973373 6.46876 1.11644 6.46875 1.26562V4.92188H1.125C0.975818 4.92188 0.832748 4.98115 0.727261 5.08664C0.621773 5.19212 0.562507 5.33519 0.5625 5.48438V16.7344C0.562507 16.8836 0.621773 17.0266 0.727261 17.1321C0.832748 17.2376 0.975818 17.2969 1.125 17.2969H15.4688C15.6165 17.2947 15.7575 17.2345 15.8613 17.1293C15.965 17.024 16.0231 16.8821 16.0231 16.7344C16.0231 16.5866 15.965 16.4447 15.8612 16.3395C15.7575 16.2342 15.6165 16.174 15.4687 16.1719H15.1875V14.9851C15.823 14.8579 16.3947 14.5142 16.805 14.0126C17.2153 13.5109 17.4389 12.8825 17.4375 12.2344C17.4375 11.2128 16.8032 8.94659 15.75 7.95422V1.26562ZM1.6875 6.04688H6.46875V16.1719H1.6875V6.04688ZM7.59375 16.1719V1.82812H14.625V7.45312C12.8099 7.45312 11.8125 11.0441 11.8125 12.2344C11.8133 12.8824 12.0376 13.5104 12.4474 14.0124C12.8573 14.5144 13.4277 14.8597 14.0625 14.9902V16.1719H7.59375ZM15.051 13.8683C14.8015 13.9317 14.5408 13.9375 14.2887 13.8852C14.0366 13.8328 13.7998 13.7238 13.5961 13.5663C13.3924 13.4089 13.2273 13.2071 13.1132 12.9763C12.999 12.7456 12.939 12.4918 12.9375 12.2344C12.9375 10.9753 13.9463 8.57812 14.625 8.57812C14.7114 8.58697 14.7935 8.62021 14.8618 8.67398C15.6345 9.22261 16.3125 11.2812 16.3125 12.2344C16.3129 12.608 16.1893 12.9712 15.961 13.2669C15.7326 13.5626 15.4126 13.7742 15.051 13.8683Z" fill="#F17B4C" />
                              <path id="Vector_2" d="M3.93721 12.2344C3.78943 12.2365 3.64844 12.2967 3.5447 12.402C3.44096 12.5072 3.38281 12.6491 3.38281 12.7969C3.38282 12.9447 3.44098 13.0865 3.54472 13.1918C3.64846 13.297 3.78946 13.3572 3.93723 13.3594C4.08501 13.3572 4.226 13.297 4.32974 13.1918C4.43348 13.0865 4.49163 12.9447 4.49163 12.7969C4.49162 12.6491 4.43346 12.5072 4.32972 12.402C4.22598 12.2967 4.08498 12.2365 3.93721 12.2344Z" fill="#F17B4C" />
                              <path id="Vector_3" d="M3.93702 7.73438C3.78928 7.73657 3.64833 7.7968 3.54464 7.90205C3.44094 8.00731 3.38281 8.14913 3.38281 8.29689C3.38282 8.44464 3.44095 8.58647 3.54465 8.69171C3.64836 8.79696 3.7893 8.85719 3.93704 8.85938C4.08478 8.85718 4.22573 8.79695 4.32943 8.6917C4.43313 8.58644 4.49125 8.44462 4.49125 8.29686C4.49125 8.14911 4.43311 8.00728 4.32941 7.90204C4.22571 7.79679 4.08476 7.73656 3.93702 7.73438Z" fill="#F17B4C" />
                              <path id="Vector_4" d="M3.93721 9.98438C3.78943 9.98652 3.64844 10.0467 3.5447 10.152C3.44096 10.2572 3.38281 10.3991 3.38281 10.5469C3.38282 10.6947 3.44098 10.8365 3.54472 10.9418C3.64846 11.047 3.78946 11.1072 3.93723 11.1094C4.08501 11.1072 4.226 11.047 4.32974 10.9418C4.43348 10.8365 4.49163 10.6947 4.49163 10.5469C4.49162 10.3991 4.43346 10.2572 4.32972 10.152C4.22598 10.0467 4.08498 9.98651 3.93721 9.98438Z" fill="#F17B4C" />
                              <path id="Vector_5" d="M9.5624 3.51562C9.4146 3.51772 9.27355 3.5779 9.16977 3.68317C9.06599 3.78843 9.00781 3.93031 9.00781 4.07814C9.00782 4.22596 9.066 4.36784 9.16979 4.4731C9.27357 4.57836 9.41462 4.63854 9.56242 4.64062C9.71023 4.63853 9.85127 4.57835 9.95506 4.47308C10.0588 4.36782 10.117 4.22594 10.117 4.07811C10.117 3.93029 10.0588 3.78841 9.95504 3.68315C9.85125 3.57789 9.71021 3.51771 9.5624 3.51562Z" fill="#F17B4C" />
                              <path id="Vector_6" d="M9.5626 12.5156C9.41476 12.5177 9.27366 12.5778 9.16984 12.6831C9.06602 12.7884 9.00781 12.9303 9.00781 13.0781C9.00782 13.226 9.06603 13.3679 9.16986 13.4732C9.27369 13.5784 9.41478 13.6386 9.56262 13.6406C9.71046 13.6386 9.85156 13.5784 9.95538 13.4732C10.0592 13.3679 10.1174 13.226 10.1174 13.0781C10.1174 12.9303 10.0592 12.7883 9.95537 12.6831C9.85154 12.5778 9.71044 12.5177 9.5626 12.5156Z" fill="#F17B4C" />
                              <path id="Vector_7" d="M9.5624 8.01562C9.4146 8.01772 9.27355 8.0779 9.16977 8.18317C9.06599 8.28843 9.00781 8.43031 9.00781 8.57814C9.00782 8.72596 9.066 8.86784 9.16979 8.9731C9.27357 9.07836 9.41462 9.13854 9.56242 9.14062C9.71023 9.13853 9.85127 9.07835 9.95506 8.97308C10.0588 8.86782 10.117 8.72594 10.117 8.57811C10.117 8.43029 10.0588 8.28841 9.95504 8.18315C9.85125 8.07789 9.71021 8.01771 9.5624 8.01562Z" fill="#F17B4C" />
                              <path id="Vector_8" d="M9.5626 5.76562C9.41476 5.76767 9.27366 5.82783 9.16984 5.9331C9.06602 6.03837 9.00781 6.18028 9.00781 6.32814C9.00782 6.47599 9.06603 6.6179 9.16986 6.72317C9.27369 6.82843 9.41478 6.88859 9.56262 6.89062C9.71046 6.88858 9.85156 6.82842 9.95538 6.72315C10.0592 6.61788 10.1174 6.47597 10.1174 6.32811C10.1174 6.18026 10.0592 6.03835 9.95537 5.93308C9.85154 5.82782 9.71044 5.76766 9.5626 5.76562Z" fill="#F17B4C" />
                              <path id="Vector_9" d="M9.5624 10.2656C9.4146 10.2677 9.27355 10.3279 9.16977 10.4332C9.06599 10.5384 9.00781 10.6803 9.00781 10.8281C9.00782 10.976 9.066 11.1178 9.16979 11.2231C9.27357 11.3284 9.41462 11.3885 9.56242 11.3906C9.71023 11.3885 9.85127 11.3283 9.95506 11.2231C10.0588 11.1178 10.117 10.9759 10.117 10.8281C10.117 10.6803 10.0588 10.5384 9.95504 10.4332C9.85125 10.3279 9.71021 10.2677 9.5624 10.2656Z" fill="#F17B4C" />
                              <path id="Vector_10" d="M12.6558 6.89062C12.8035 6.88843 12.9445 6.8282 13.0482 6.72295C13.1519 6.61769 13.21 6.47587 13.21 6.32811C13.21 6.18036 13.1519 6.03853 13.0482 5.93329C12.9445 5.82804 12.8035 5.76781 12.6558 5.76562C12.508 5.76782 12.3671 5.82805 12.2634 5.9333C12.1597 6.03856 12.1016 6.18038 12.1016 6.32814C12.1016 6.47589 12.1597 6.61772 12.2634 6.72296C12.3671 6.82821 12.5081 6.88844 12.6558 6.89062Z" fill="#F17B4C" />
                              <path id="Vector_11" d="M12.6558 4.64062C12.8035 4.63843 12.9445 4.5782 13.0482 4.47295C13.1519 4.36769 13.21 4.22587 13.21 4.07811C13.21 3.93036 13.1519 3.78853 13.0482 3.68329C12.9445 3.57804 12.8035 3.51781 12.6558 3.51562C12.508 3.51782 12.3671 3.57805 12.2634 3.6833C12.1597 3.78856 12.1016 3.93038 12.1016 4.07814C12.1016 4.22589 12.1597 4.36772 12.2634 4.47296C12.3671 4.57821 12.5081 4.63844 12.6558 4.64062Z" fill="#F17B4C" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1047_2945">
                                <rect width="18" height="18" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <p class="mb-0">Office Spaces</p>
                      </li>
                      <li class="d-flex  align-items-center me-4 mb-2" data-id="villas">
                        <span class="icon me-1 d-flex align-items-center justify-content-center">
                          <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15.5" cy="15.5" r="15.5" fill="#F8DED4" />
                            <g clip-path="url(#clip0_501_4638)">
                              <mask id="mask0_501_4638" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="7" y="7" width="18" height="18">
                                <path d="M7 7H24.5V24.5H7V7Z" fill="white" />
                              </mask>
                              <g mask="url(#mask0_501_4638)">
                                <path d="M15.75 14.7588H7.5127V17.835H23.9873" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.6992 10.5889L23.9873 7.5127V23.9873H7.5127" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              </g>
                              <path d="M15.75 17.835V9.97363" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              <mask id="mask1_501_4638" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="7" y="7" width="18" height="18">
                                <path d="M7 7H24.5V24.5H7V7Z" fill="white" />
                              </mask>
                              <g mask="url(#mask1_501_4638)">
                                <path d="M21.9023 23.9873V17.835" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M19.8516 23.9873V17.835" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.8008 23.9873V17.835" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              </g>
                              <path d="M21.9023 15.7842H17.8008V12.6396L21.9023 11.6143V15.7842Z" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              <mask id="mask2_501_4638" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="7" y="7" width="18" height="18">
                                <path d="M7 7H24.5V24.5H7V7Z" fill="white" />
                              </mask>
                              <g mask="url(#mask2_501_4638)">
                                <path d="M9.59766 14.7588V23.9873" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              </g>
                              <path d="M11.6484 14.7588V17.835" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M13.6992 14.7588V17.835" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              <mask id="mask3_501_4638" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="7" y="7" width="18" height="18">
                                <path d="M7 7H24.5V24.5H7V7Z" fill="white" />
                              </mask>
                              <g mask="url(#mask3_501_4638)">
                                <path d="M15.75 23.9873V19.8857H11.6484V23.9873" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              </g>
                              <path d="M14.7246 21.9365H15.75" stroke="#F17B4C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                              <clipPath id="clip0_501_4638">
                                <rect width="17.5" height="17.5" fill="white" transform="translate(7 7)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <p class="mb-0">Villas</p>
                      </li>
                    </ul>
                  </div>
                  <div class="search-fields">
                    <div class="row align-items-center">
                      <div class="sinput  col-6 col-lg-6 col-sm-12">
                        <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="Pin">
                            <path id="Vector" d="M6.5 0.5C5.00876 0.501978 3.57917 1.09525 2.52471 2.14971C1.47025 3.20417 0.876978 4.63376 0.875 6.125C0.875 10.1633 6.11562 15.2211 6.33828 15.4344C6.38159 15.4765 6.43961 15.5 6.5 15.5C6.56039 15.5 6.61841 15.4765 6.66172 15.4344C6.88437 15.2211 12.125 10.1633 12.125 6.125C12.123 4.63376 11.5298 3.20417 10.4753 2.14971C9.42083 1.09525 7.99124 0.501978 6.5 0.5ZM6.5 8.70312C5.9901 8.70312 5.49164 8.55192 5.06767 8.26863C4.6437 7.98534 4.31326 7.5827 4.11812 7.11161C3.92299 6.64052 3.87194 6.12214 3.97141 5.62203C4.07089 5.12193 4.31643 4.66255 4.67699 4.30199C5.03755 3.94143 5.49693 3.69589 5.99703 3.59641C6.49714 3.49694 7.01552 3.54799 7.48661 3.74312C7.9577 3.93826 8.36034 4.2687 8.64363 4.69267C8.92692 5.11664 9.07812 5.6151 9.07812 6.125C9.07771 6.80864 8.80596 7.46415 8.32256 7.94756C7.83915 8.43096 7.18364 8.70271 6.5 8.70312Z" fill="#FF0000" />
                          </g>
                        </svg>
                        <input id="town-search" data-nonce="1b2e1d8916" class="form-control" value="" type="text" placeholder="Type the location where you want" />
                        <button type="button" id="advanced-search-toggle" class="btn">Advanced</button>
                      </div>
                      <div class="col-md-4 col-6">
                        <div class="d-flex w-100 justify-content-end">
                          <button id="search-submit" class="btn w-100 btn-primary"> Search </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div id="advanced-search-form" style="display: none;">
                <div class="form-group" style="    display: flex;align-items: baseline;justify-content: flex-end;gap: 3em;">
                  <select id="bathrooms" class="form-control">
                    <option value="">Furnished</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5+</option>
                  </select>
                  <select id="bathrooms" class="form-control">
                    <option value="">No Bedroom</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5+</option>
                  </select>
                  <input id="" class="form-control" value="" type="number" placeholder="Min Price" />
                  <input id="" class="form-control" value="" type="number" placeholder="Max Price" />
                </div>
                <div class="form-group" id="check-aminites">
                  <div class="amenity">
                    <input type="checkbox">
                    <label for="bedrooms">Air Condition</label>
                  </div>
                  <div class="amenity">
                    <input type="checkbox">
                    <label for="Gym">Gym</label>
                  </div>
                  <div class="amenity">
                    <input type="checkbox">
                    <label for="View of Water">View of Water</label>
                  </div>
                  <div class="amenity">
                    <input type="checkbox">
                    <label for="Children's Play Area">Children's Play Area</label>
                  </div>
                  <div class="amenity">
                    <input type="checkbox">
                    <label for="bedrooms">Pets Allowed</label>
                  </div>
                </div>
                <div class="form-group " id="check-aminites">
                  <div class="amenity">
                    <input type="checkbox">
                    <label for="bedrooms">Swimming Pool</label>
                  </div>
                  <div class="amenity">
                    <input type="checkbox">
                    <label for="bedrooms">Wifi</label>
                  </div>
                  <div class="amenity">
                    <input type="checkbox">
                    <label for="bedrooms">Maids Room</label>
                  </div>
                  <div class="amenity">
                    <input type="checkbox">
                    <label for="bedrooms">Built in Wardrobes</label>
                  </div>
                  <div class="amenity">
                    <input type="checkbox">
                    <label for="bedrooms">Balcony</label>
                  </div>
                </div>
                <!-- Add more advanced search fields as needed -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Search bar-->
      <section class="properties-main rent">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-12">
              <section class="properties-intro mb-4 mt-5 pb-2">
                <div class="container">
                  <h1>5,482 Apartments for rent in Bahrain</h1>
                  <h5 class="mt-4 pt-2 mb-3">Check Also</h5>
                  <div class="links">
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <a title="" href="#!">
                          <span class="text-count">(1,384)</span> One Bedroom Apartments for rent in Bahrain </a>
                      </div>
                      <div class="col-md-6 col-12">
                        <a title="" href="#!">
                          <span class="text-count">(267)</span> Studio flat for rent in Bahrain </a>
                      </div>
                      <div class="col-md-6 col-12">
                        <a title="" href="#!">
                          <span class="text-count">(2,920)</span> 2 Bedrooms Apartments for rent in Bahrain </a>
                      </div>
                      <div class="col-md-6 col-12">
                        <a title="" href="#!">
                          <span class="text-count">(821)</span> 3 bedroom apartments for rent in Bahrain </a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="properties-main" class="properties-list">
                <div class="props-wrap">
                  <div class="filter-properties">
                    <div class="mb-4 pb-2 d-flex flex-wrap align-items-center">
                      <label for="sort_by" class="form-label me-3 mb-0">Sort by:</label>
                      <select name="sort_by" id="sort-by" class="form-select w-auto" aria-label="Sort by">
                        <option value="modified_DESC"> Date Updated </option>
                        <option value="price_DESC"> Price High to Low </option>
                        <option value="price_ASC"> Price Low to High </option>
                        <option value="bedrooms_DESC"> Bedrooms More </option>
                        <option value="bedrooms_ASC"> Bedrooms Less </option>
                        <option value="created_DESC"> Newest to Oldest </option>
                        <option value="created_ASC"> Oldest to Newest </option>
                      </select>
                      <button type="button" class="btn btn-primary mb-4 filters-button" data-bs-toggle="modal" data-bs-target="#filtersModal"> Filters </button>
                    </div>
                  </div>
                  <div id="property-8526" class="property ">
                    <div class="prop-wrap">
                      <div class="gallery-wrap">
                        <a href="#!">
                          <div class="feature-img">
                            <div class="swiper-gallery">
                              <div class="swiper main swiper-initialized swiper-horizontal swiper-backface-hidden">
                                <div class="swiper-wrapper" id="swiper-wrapper-da98b7b0611a8ee7" aria-live="polite">
                                  <div class="swiper-slide swiper-slide-active" style="width: 320px;" role="group" aria-label="1 / 6">
                                    <img src="assets/images/property/8526-cover.webp" loading="lazy" alt="living room">
                                  </div>
                                  <div class="swiper-slide swiper-slide-next" style="width: 320px;" role="group" aria-label="2 / 6">
                                    <img src="assets/images/property/8526-IMG_3478(1).png" loading="lazy" alt="living room">
                                  </div>
                                  <div class="swiper-slide" style="width: 320px;" role="group" aria-label="3 / 6">
                                    <img src="assets/images/property/8526-IMG_3479.png" loading="lazy" alt="living room">
                                  </div>
                                  <div class="swiper-slide" style="width: 320px;" role="group" aria-label="4 / 6">
                                    <img src="assets/images/property/8526-IMG_3480(1).png" loading="lazy" alt="living room">
                                    <div class="swiper-lazy-preloader"></div>
                                  </div>
                                  <div class="swiper-slide" style="width: 320px;" role="group" aria-label="5 / 6">
                                    <img src="assets/images/property/8526-IMG_3481.png" loading="lazy" alt="living room">
                                    <div class="swiper-lazy-preloader"></div>
                                  </div>
                                  <div class="swiper-slide" role="group" aria-label="6 / 6" style="width: 320px;">
                                    <img src="assets/images/property/8526-IMG_3482(1).png" loading="lazy" alt="dining area">
                                    <div class="swiper-lazy-preloader"></div>
                                  </div>
                                </div>
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-da98b7b0611a8ee7" aria-disabled="false"></div>
                                <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-da98b7b0611a8ee7" aria-disabled="true"></div>
                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                  <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span>
                                  <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                                  <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
                                  <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span>
                                  <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span>
                                  <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                              </div>
                            </div>
                            <div class="prop-fav fav-action " data-id="8526">
                              <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="20">
                                  <path d="M0.847656 1.90735e-06H22.4477V20H0.847656V1.90735e-06Z" fill="white"></path>
                                </mask>
                                <path d="M11.6523 5.89844C11.6523 5.89844 12.7773 1.79688 16.3398 1.79688C19.1148 1.79688 21.0664 4.14836 21.0664 6.93418C21.0664 10.787 17.2123 13.3382 11.6523 18.2031C6.09238 13.3382 2.23828 10.787 2.23828 6.93418C2.23828 4.14836 4.18984 1.79688 6.96484 1.79688C10.5273 1.79688 11.6523 5.89844 11.6523 5.89844Z" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                            </div>
                          </div>
                        </a>
                        <div class="img-tag"> Apartment for Rent </div>
                      </div>
                      <div class="content-wrap">
                        <a href="https://www.weetas.com/bh-en/properties-for-rent/property-rr8526-residential-flat-for-rent-with-a-prime-location.html">
                          <h4 class="prop-title">Residential Flat for Rent with A Prime Location </h4>
                          <div class="price">
                            <span class="amount">350</span>
                            <span class="currency"> BHD</span>
                            <span class="mon"> / Monthly</span>
                          </div>
                          <div class="location">
                            <svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g id="Pin">
                                <path id="Vector" d="M5.5 0.5C4.2076 0.501714 2.96862 1.01588 2.05475 1.92975C1.14088 2.84362 0.626714 4.0826 0.625 5.375C0.625 8.87484 5.16687 13.2583 5.35984 13.4431C5.39738 13.4796 5.44766 13.5 5.5 13.5C5.55234 13.5 5.60262 13.4796 5.64016 13.4431C5.83312 13.2583 10.375 8.87484 10.375 5.375C10.3733 4.0826 9.85912 2.84362 8.94525 1.92975C8.03138 1.01588 6.7924 0.501714 5.5 0.5ZM5.5 7.60938C5.05808 7.60938 4.62609 7.47833 4.25865 7.23281C3.89121 6.9873 3.60482 6.63834 3.43571 6.23006C3.26659 5.82178 3.22234 5.37252 3.30856 4.9391C3.39477 4.50567 3.60758 4.10754 3.92006 3.79506C4.23254 3.48258 4.63067 3.26977 5.0641 3.18356C5.49752 3.09734 5.94678 3.14159 6.35506 3.31071C6.76334 3.47982 7.1123 3.76621 7.35781 4.13365C7.60333 4.50109 7.73438 4.93308 7.73438 5.375C7.73402 5.96748 7.4985 6.5356 7.07955 6.95455C6.6606 7.3735 6.09248 7.60902 5.5 7.60938Z" fill="#757373"></path>
                              </g>
                            </svg>
                            <span> Hidd, Bahrain </span>
                          </div>
                          <div class="d-flex align-items-center prop-furn align-items-center">
                            <div class="ftype f-icon">
                              <span class="icon">
                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Group">
                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M5.56381 0.876652C5.84856 0.712589 6.17138 0.626221 6.5 0.626221C6.82863 0.626221 7.1515 0.712596 7.43619 0.876671C7.43663 0.876921 7.43706 0.877177 7.4375 0.877427L11.8125 3.37742C12.0973 3.54183 12.3338 3.77822 12.4983 4.06289C12.6629 4.34756 12.7497 4.6705 12.75 4.9993V10.0006C12.7497 10.3294 12.6629 10.6523 12.4983 10.937C12.3338 11.2217 12.0973 11.4581 11.8125 11.6224L11.8101 11.6238L7.4375 14.1224C7.43713 14.1227 7.43675 14.1229 7.43638 14.1231C7.15163 14.2873 6.82869 14.3737 6.5 14.3737C6.17131 14.3737 5.84844 14.2873 5.56369 14.1231C5.56325 14.1229 5.56288 14.1227 5.5625 14.1224L1.18991 11.6238L1.1875 11.6224C0.902744 11.4581 0.666231 11.2217 0.501681 10.937C0.337131 10.6523 0.250338 10.3294 0.25 10.0006V4.9993C0.250338 4.6705 0.337131 4.34756 0.501681 4.06289C0.666231 3.77822 0.902744 3.54183 1.1875 3.37743L1.18991 3.37603L5.56381 0.876652ZM6.5 1.87622C6.39031 1.87622 6.2825 1.9051 6.1875 1.95996L6.18506 1.96135L1.8125 4.45996C1.81217 4.46015 1.81184 4.46034 1.81151 4.46053C1.71704 4.5153 1.63856 4.59388 1.58389 4.68845C1.52909 4.78326 1.50016 4.8908 1.5 5.00031V9.99957C1.50016 10.1091 1.52909 10.2166 1.58389 10.3114C1.63856 10.406 1.71704 10.4846 1.81151 10.5394C1.81184 10.5396 1.81217 10.5398 1.8125 10.5399L6.1875 13.0399C6.2825 13.0948 6.39031 13.1237 6.5 13.1237C6.60969 13.1237 6.7175 13.0948 6.8125 13.0399L6.81494 13.0386L11.1875 10.5399C11.1878 10.5398 11.1882 10.5396 11.1885 10.5394C11.2829 10.4846 11.3614 10.406 11.4161 10.3114C11.4709 10.2166 11.4999 10.1089 11.5 9.99932V5.00058C11.4999 4.89098 11.4709 4.78333 11.4161 4.68845C11.3614 4.59388 11.2829 4.51531 11.1885 4.46053C11.1882 4.46034 11.1878 4.46015 11.1875 4.45996L6.8125 1.95996C6.7175 1.90511 6.60969 1.87622 6.5 1.87622Z" fill="black"></path>
                                    <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd" d="M0.513733 4.06395C0.685583 3.76459 1.06757 3.66122 1.36693 3.83307L6.4995 6.77944L11.6321 3.83307C11.9315 3.66122 12.3134 3.76459 12.4853 4.06395C12.6571 4.36331 12.5538 4.74529 12.2544 4.91714L6.81069 8.04213C6.618 8.15275 6.38106 8.15275 6.18838 8.04213L0.744614 4.91714C0.445252 4.74529 0.341883 4.36331 0.513733 4.06395Z" fill="black"></path>
                                    <path id="Vector_3" fill-rule="evenodd" clip-rule="evenodd" d="M6.5 6.875C6.84519 6.875 7.125 7.15481 7.125 7.5V13.75C7.125 14.0952 6.84519 14.375 6.5 14.375C6.15481 14.375 5.875 14.0952 5.875 13.75V7.5C5.875 7.15481 6.15481 6.875 6.5 6.875Z" fill="black"></path>
                                  </g>
                                </svg>
                              </span> Furnished
                            </div>
                            <div class="price-inclusion f-icon incl">
                              <span class="icon">
                                <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Energy">
                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M3.49399 0.922967C3.46818 0.922967 3.43185 0.939352 3.411 0.98244L3.40911 0.986397L0.936447 5.97474C0.936336 5.97496 0.936226 5.97515 0.936152 5.97533C0.918763 6.01125 0.918468 6.05028 0.931426 6.08365C0.944311 6.11673 0.965539 6.13423 0.986804 6.14158L0.995037 6.14442L3.52334 7.0734C3.52323 7.07337 3.52345 7.07344 3.52334 7.0734C3.98187 7.24131 4.25647 7.70143 4.19142 8.18923L4.19105 8.19197L3.83368 10.7557L7.35284 6.69517C7.35273 6.69532 7.35295 6.69506 7.35284 6.69517C7.37761 6.66615 7.38747 6.62669 7.37617 6.58342C7.36484 6.53996 7.33815 6.51309 7.3075 6.50157L5.00315 5.69656L5.00219 5.69623C4.39377 5.48217 4.14221 4.78182 4.43198 4.22372L4.43549 4.21697L6.11422 1.11082C6.15819 1.02682 6.09882 0.928328 6.00808 0.922967H3.49399ZM6.93348 1.53616L5.24992 4.65139C5.20953 4.73213 5.25276 4.80575 5.30821 4.82546C5.3081 4.82542 5.30832 4.8255 5.30821 4.82546L7.61936 5.63284C8.30084 5.8786 8.52656 6.7459 8.05263 7.29698L8.05149 7.29831L4.21313 11.7272C3.95876 12.0246 3.58038 12.0594 3.29647 11.9249C3.02047 11.7942 2.80656 11.4913 2.85123 11.1191L2.85175 11.1147L3.27654 8.06725C3.27658 8.06696 3.27661 8.06666 3.27665 8.06637C3.28112 8.03144 3.27336 8.00453 3.26188 7.98533C3.25014 7.96573 3.2319 7.94956 3.20624 7.94018L0.680231 7.01216C0.0840612 6.8026 -0.159126 6.11278 0.107682 5.56849L0.108583 5.56668L2.58129 0.578161C2.7455 0.240946 3.09002 0 3.49399 0H6.02318L6.0296 0.000177186C6.8187 0.0220958 7.28502 0.860194 6.93348 1.53616Z" fill="#EE4035"></path>
                                  </g>
                                </svg>
                              </span> Inclusive
                            </div>
                          </div>
                          <div class="d-flex justify-content-between prop-ref align-items-center">
                            <div class="prop-rooms d-flex flex-wrap">
                              <div class="rooms f-icon">
                                <span class="icon">
                                  <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="ðŸ¦† icon &quot;bed double fill&quot;">
                                      <path id="Vector" d="M2.07385 3.69244H3.32763V2.98266C3.32763 2.52154 3.58668 2.27285 4.05296 2.27285H5.8922C6.35848 2.27285 6.61752 2.52154 6.61752 2.98266V3.69244H7.73661V2.98266C7.73661 2.52154 7.99566 2.27285 8.48787 2.27285H10.2131C10.7053 2.27285 10.9644 2.52154 10.9644 2.98266V3.69244H12.2181V2.27803C12.2181 1.36102 11.7312 0.894714 10.84 0.894714H3.45196C2.56603 0.894714 2.07385 1.36102 2.07385 2.27803V3.69244ZM0.892578 8.80087C0.892578 9.05473 1.05836 9.21533 1.31741 9.21533H1.60754C1.86141 9.21533 2.02719 9.05473 2.02719 8.80087V8.06516C2.08419 8.0807 2.24999 8.09106 2.36914 8.09106H11.928C12.0472 8.09106 12.2078 8.0807 12.2648 8.06516V8.80087C12.2648 9.05473 12.4305 9.21533 12.6844 9.21533H12.9797C13.2336 9.21533 13.3994 9.05473 13.3994 8.80087V5.85288C13.3994 4.91514 12.8762 4.40223 11.928 4.40223H2.36398C1.41585 4.40223 0.892578 4.91514 0.892578 5.85288L0.892578 8.80087Z" fill="black"></path>
                                    </g>
                                  </svg>
                                </span> 1 Beds
                              </div>
                              <div class="bathrooms f-icon">
                                <span class="icon">
                                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="ðŸ¦† icon &quot;Bath&quot;">
                                      <path id="Vector" d="M1.48264 8.52064C1.48319 8.78928 1.54048 9.05477 1.65074 9.29974C1.76101 9.5447 1.92178 9.76362 2.12251 9.94215V10.7602C2.12251 10.845 2.15622 10.9264 2.21622 10.9864C2.27622 11.0464 2.35759 11.0801 2.44244 11.0801H3.08231C3.16716 11.0801 3.24854 11.0464 3.30854 10.9864C3.36854 10.9264 3.40225 10.845 3.40225 10.7602V10.4402H8.52119V10.7602C8.52119 10.845 8.5549 10.9264 8.6149 10.9864C8.6749 11.0464 8.75628 11.0801 8.84113 11.0801H9.481C9.56585 11.0801 9.64723 11.0464 9.70722 10.9864C9.76722 10.9264 9.80093 10.845 9.80093 10.7602V9.94215C10.0017 9.76362 10.1624 9.5447 10.2727 9.29974C10.383 9.05477 10.4402 8.78928 10.4408 8.52064V7.56084H1.48264V8.52064ZM10.7607 5.96116H2.44244V2.22693C2.44263 2.14296 2.46767 2.06093 2.51442 1.99118C2.56117 1.92142 2.62753 1.86708 2.70513 1.835C2.78273 1.80291 2.86809 1.79453 2.95045 1.8109C3.0328 1.82727 3.10847 1.86767 3.1679 1.92699L3.55322 2.31211C3.29067 2.90959 3.40105 3.49407 3.72558 3.90639L3.72218 3.90979C3.66241 3.96975 3.62885 4.05097 3.62885 4.13564C3.62885 4.22031 3.66241 4.30152 3.72218 4.36149L3.94833 4.58765C3.97804 4.61736 4.01332 4.64094 4.05214 4.65702C4.09096 4.6731 4.13257 4.68138 4.17459 4.68138C4.21661 4.68138 4.25822 4.6731 4.29704 4.65702C4.33586 4.64094 4.37113 4.61736 4.40084 4.58765L6.50781 2.48068C6.53753 2.45097 6.5611 2.4157 6.57718 2.37688C6.59326 2.33806 6.60154 2.29645 6.60154 2.25443C6.60154 2.21241 6.59326 2.1708 6.57718 2.13198C6.5611 2.09316 6.53753 2.05788 6.50781 2.02817L6.28166 1.80202C6.22166 1.74207 6.14032 1.70839 6.0555 1.70839C5.97069 1.70839 5.88934 1.74207 5.82935 1.80202L5.82595 1.80542C5.41363 1.48089 4.82955 1.37051 4.23168 1.63305L3.84656 1.24773C3.6529 1.05405 3.40616 0.922155 3.13753 0.868716C2.86891 0.815277 2.59047 0.842699 2.33743 0.947514C2.0844 1.05233 1.86813 1.22983 1.71597 1.45757C1.56382 1.6853 1.48262 1.95304 1.48264 2.22693V5.96116H1.16271C1.07786 5.96116 0.996479 5.99487 0.93648 6.05487C0.876481 6.11487 0.842773 6.19625 0.842773 6.2811L0.842773 6.60103C0.842773 6.68588 0.876481 6.76726 0.93648 6.82726C0.996479 6.88726 1.07786 6.92097 1.16271 6.92097H10.7607C10.8456 6.92097 10.927 6.88726 10.987 6.82726C11.047 6.76726 11.0807 6.68588 11.0807 6.60103V6.2811C11.0807 6.19625 11.047 6.11487 10.987 6.05487C10.927 5.99487 10.8456 5.96116 10.7607 5.96116Z" fill="black"></path>
                                    </g>
                                  </svg>
                                </span> 2 Baths
                              </div>
                            </div>
                            <div class="ms-auto ref"> Ref ID: RR8526 </div>
                          </div>
                        </a>
                        <div class="property-footer">
                          <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-secondary prop-number">
                              <span class="phone">+973-66675533</span>
                              <span class="show-number">Call Number</span>
                            </a>
                            <a href="tel:+97366675533" class="phone-m">
                              <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="phone-call (1) 1" clip-path="url(#clip0_797_8749)">
                                  <g id="Group">
                                    <g id="Group_2">
                                      <path id="Vector" d="M24.4711 18.8475L20.9822 15.3587C19.7362 14.1126 17.618 14.6111 17.1196 16.2309C16.7458 17.3523 15.4998 17.9753 14.3784 17.7261C11.8864 17.1031 8.52214 13.8634 7.89913 11.2468C7.52533 10.1254 8.27294 8.87936 9.39435 8.50561C11.0142 8.0072 11.5126 5.88899 10.2666 4.64298L6.77773 1.15415C5.78092 0.281949 4.28571 0.281949 3.4135 1.15415L1.04609 3.52157C-1.32133 6.01359 1.29529 12.6174 7.15153 18.4737C13.0078 24.3299 19.6116 27.0712 22.1036 24.5791L24.4711 22.2117C25.3433 21.2149 25.3433 19.7197 24.4711 18.8475Z" fill="#F17B4C"></path>
                                    </g>
                                  </g>
                                </g>
                                <defs>
                                  <clipPath id="clip0_797_8749">
                                    <rect width="25" height="25" fill="white" transform="translate(0.152344 0.5)"></rect>
                                  </clipPath>
                                </defs>
                              </svg>
                            </a>
                            <a href="whatsapp://send/?phone=+97366675533&amp;text=I would like to inquiry about: Residential Flat for Rent with A Prime Location  RR8526" class="whatsapp-link">
                              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="whatsapp 1" clip-path="url(#clip0_302_1228)">
                                  <path id="Vector" d="M15.0037 0H14.9963C6.72563 0 0 6.7275 0 15C0 18.2812 1.0575 21.3225 2.85562 23.7919L0.98625 29.3644L6.75187 27.5213C9.12375 29.0925 11.9531 30 15.0037 30C23.2744 30 30 23.2706 30 15C30 6.72938 23.2744 0 15.0037 0Z" fill="#4CAF50"></path>
                                  <path id="Vector_2" d="M23.732 21.1818C23.3702 22.2037 21.9339 23.0512 20.7883 23.2987C20.0045 23.4656 18.9808 23.5987 15.5345 22.17C11.1264 20.3437 8.28766 15.8643 8.06641 15.5737C7.85453 15.2831 6.28516 13.2018 6.28516 11.0493C6.28516 8.89685 7.37828 7.84872 7.81891 7.39872C8.18078 7.02935 8.77891 6.8606 9.35266 6.8606C9.53828 6.8606 9.70516 6.86997 9.85516 6.87747C10.2958 6.89622 10.517 6.92247 10.8077 7.6181C11.1695 8.48997 12.0508 10.6425 12.1558 10.8637C12.2627 11.085 12.3695 11.385 12.2195 11.6756C12.0789 11.9756 11.9552 12.1087 11.7339 12.3637C11.5127 12.6187 11.3027 12.8137 11.0814 13.0875C10.8789 13.3256 10.6502 13.5806 10.9052 14.0212C11.1602 14.4525 12.0414 15.8906 13.3389 17.0456C15.0133 18.5362 16.3708 19.0125 16.8564 19.215C17.2183 19.365 17.6495 19.3293 17.9139 19.0481C18.2495 18.6862 18.6639 18.0862 19.0858 17.4956C19.3858 17.0718 19.7645 17.0193 20.162 17.1693C20.567 17.31 22.7102 18.3693 23.1508 18.5887C23.5914 18.81 23.882 18.915 23.9889 19.1006C24.0939 19.2862 24.0939 20.1581 23.732 21.1818Z" fill="#FAFAFA"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_302_1228">
                                    <rect width="30" height="30" fill="white"></rect>
                                  </clipPath>
                                </defs>
                              </svg>
                            </a>
                            <a href="#!" data-id="8526" class="btn btn-primary prop-inqure">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="g2907">
                                  <g id="g2909">
                                    <g id="Clip path group">
                                      <mask id="mask0_1548_10006" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                        <g id="clipPath2915">
                                          <path id="path2913" d="M0 0H20V20H0V0Z" fill="white"></path>
                                        </g>
                                      </mask>
                                      <g mask="url(#mask0_1548_10006)">
                                        <g id="g2911">
                                          <g id="g2917">
                                            <path id="path2919" d="M6.875 6.875C3.42305 6.875 0.585938 9.67305 0.585938 13.125C0.585938 14.148 0.831641 15.1137 1.26758 15.9664L0.585938 19.375L4.03359 18.6934C4.88633 19.1293 5.85195 19.375 6.875 19.375C10.327 19.375 13.125 16.577 13.125 13.125" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </g>
                                          <g id="g2921">
                                            <path id="path2923" d="M6.875 6.875C6.875 10.327 9.67305 13.125 13.125 13.125C14.148 13.125 15.1137 12.8793 15.9664 12.4434L19.4141 13.125L18.7324 9.71641C19.1684 8.86367 19.4141 7.89805 19.4141 6.875C19.4141 3.42305 16.577 0.625001 13.125 0.625001C9.67305 0.625001 6.875 3.42305 6.875 6.875Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </g>
                                          <g id="g2925">
                                            <path id="path2927" d="M11.875 5.30785C11.875 4.61137 12.4466 4.04852 13.1462 4.06258C13.794 4.07563 14.3307 4.59449 14.3643 5.2416C14.4015 5.95863 13.8304 6.55332 13.1248 6.55543V7.8125" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </g>
                                          <g id="g2933">
                                            <path id="path2935" d="M4.6875 14.375H9.0625" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </g>
                                          <g id="g2937">
                                            <path id="path2939" d="M9.37461 11.875H4.6875" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </g>
                                        </g>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                              <span class="text"> Inquire Now</span>
                            </a>
                            <a href="#" class="property-mb">
                              <svg class="mb-icon" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                  <path id="XMLID_294_" d="M10 12.3438C10 13.6359 11.0516 14.6875 12.3438 14.6875C13.6359 14.6875 14.6875 13.6359 14.6875 12.3438C14.6875 11.0516 13.6359 10 12.3438 10C11.0516 10 10 11.0516 10 12.3438Z" fill="#F17B4C"></path>
                                  <path id="XMLID_295_" d="M10.1562 22.3125C10.1562 23.6047 11.2078 24.6562 12.5 24.6562C13.7922 24.6562 14.8438 23.6047 14.8438 22.3125C14.8438 21.0203 13.7922 19.9688 12.5 19.9688C11.2078 19.9688 10.1562 21.0203 10.1562 22.3125Z" fill="#F17B4C"></path>
                                  <path id="XMLID_297_" d="M10.1562 2.6875C10.1562 3.97969 11.2078 5.03125 12.5 5.03125C13.7922 5.03125 14.8438 3.97969 14.8438 2.6875C14.8438 1.39531 13.7922 0.34375 12.5 0.34375C11.2078 0.34375 10.1562 1.39531 10.1562 2.6875Z" fill="#F17B4C"></path>
                                </g>
                              </svg>
                            </a>
                            <ul class="d-none property-menu">
                              <li class="share">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Group">
                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M8.16699 0.666626H4.00033C2.15949 0.666626 0.666992 2.15913 0.666992 3.99996V14C0.666992 15.8408 2.15949 17.3333 4.00033 17.3333H14.0003C15.8412 17.3333 17.3337 15.8408 17.3337 14C17.3337 12.1075 17.3337 9.83329 17.3337 9.83329C17.3337 9.37329 16.9603 8.99996 16.5003 8.99996C16.0403 8.99996 15.667 9.37329 15.667 9.83329V14C15.667 14.92 14.9203 15.6666 14.0003 15.6666C11.2253 15.6666 6.77449 15.6666 4.00033 15.6666C3.07949 15.6666 2.33366 14.92 2.33366 14C2.33366 11.225 2.33366 6.77413 2.33366 3.99996C2.33366 3.07913 3.07949 2.33329 4.00033 2.33329H8.16699C8.62699 2.33329 9.00033 1.95996 9.00033 1.49996C9.00033 1.03996 8.62699 0.666626 8.16699 0.666626ZM14.4887 2.33329H11.5003C11.0403 2.33329 10.667 1.95996 10.667 1.49996C10.667 1.03996 11.0403 0.666626 11.5003 0.666626H16.5003C16.9603 0.666626 17.3337 1.03996 17.3337 1.49996V6.49996C17.3337 6.95996 16.9603 7.33329 16.5003 7.33329C16.0403 7.33329 15.667 6.95996 15.667 6.49996V3.51163L9.58949 9.58913C9.26449 9.91413 8.73616 9.91413 8.41116 9.58913C8.08533 9.26413 8.08533 8.73579 8.41116 8.41079L14.4887 2.33329Z" fill="black"></path>
                                  </g>
                                </svg> Share
                              </li>
                              <li class="report">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Layer 2">
                                    <g id="Layer 1">
                                      <g id="i">
                                        <path id="Vector" d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z" fill="#212121"></path>
                                        <path id="Vector_2" d="M10 18.8672C14.8972 18.8672 18.8672 14.8972 18.8672 10C18.8672 5.10279 14.8972 1.13281 10 1.13281C5.10279 1.13281 1.13281 5.10279 1.13281 10C1.13281 14.8972 5.10279 18.8672 10 18.8672Z" fill="white"></path>
                                        <path id="Vector_3" d="M10.0117 6.41678C9.73982 6.42283 9.47535 6.32776 9.26953 6.14998C9.06354 5.97186 8.96055 5.72003 8.96055 5.39451C8.9568 5.25729 8.98323 5.12092 9.03797 4.99504C9.09271 4.86916 9.17442 4.75683 9.27734 4.666C9.47689 4.4798 9.74037 4.37743 10.0133 4.38006C10.2758 4.37743 10.5304 4.46952 10.7305 4.63943C10.9388 4.81209 11.043 5.06378 11.043 5.39451C11.043 5.71483 10.9413 5.96535 10.7379 6.14608C10.5389 6.32502 10.2793 6.42177 10.0117 6.41678ZM11.0418 8.56834V14.5879C11.0418 15.0045 10.9426 15.3199 10.7441 15.534C10.6487 15.6385 10.5319 15.7213 10.4016 15.7766C10.2713 15.832 10.1306 15.8586 9.98906 15.8547C9.68359 15.8547 9.43555 15.7453 9.24492 15.5265C9.0543 15.3078 8.95898 14.9953 8.95898 14.589V8.62928C8.95898 8.21756 9.0543 7.9074 9.24492 7.69881C9.43555 7.49022 9.68359 7.38605 9.98906 7.38631C10.294 7.38631 10.5457 7.49048 10.7441 7.69881C10.9426 7.90714 11.0418 8.19699 11.0418 8.56834Z" fill="#212121"></path>
                                      </g>
                                    </g>
                                  </g>
                                </svg> Report
                              </li>
                            </ul>
                            <div class="share-popup popup d-none">
                              <div class="property-share">
                                <div class="popup-header d-flex align-items-center justify-content-between">
                                  <h5>Share this property</h5>
                                  <div class="close">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <g id="icon/close button">
                                        <path id="Vector" d="M15.7098 8.28996C15.6169 8.19623 15.5063 8.12183 15.3844 8.07107C15.2626 8.0203 15.1318 7.99416 14.9998 7.99416C14.8678 7.99416 14.7371 8.0203 14.6153 8.07107C14.4934 8.12183 14.3828 8.19623 14.2898 8.28996L11.9998 10.59L9.70984 8.28996C9.52153 8.10165 9.26614 7.99587 8.99984 7.99587C8.73353 7.99587 8.47814 8.10165 8.28983 8.28996C8.10153 8.47826 7.99574 8.73366 7.99574 8.99996C7.99574 9.26626 8.10153 9.52165 8.28983 9.70996L10.5898 12L8.28983 14.29C8.19611 14.3829 8.12171 14.4935 8.07094 14.6154C8.02017 14.7372 7.99404 14.8679 7.99404 15C7.99404 15.132 8.02017 15.2627 8.07094 15.3845C8.12171 15.5064 8.19611 15.617 8.28983 15.71C8.3828 15.8037 8.4934 15.8781 8.61526 15.9288C8.73712 15.9796 8.86782 16.0058 8.99984 16.0058C9.13185 16.0058 9.26255 15.9796 9.38441 15.9288C9.50627 15.8781 9.61687 15.8037 9.70984 15.71L11.9998 13.41L14.2898 15.71C14.3828 15.8037 14.4934 15.8781 14.6153 15.9288C14.7371 15.9796 14.8678 16.0058 14.9998 16.0058C15.1318 16.0058 15.2626 15.9796 15.3844 15.9288C15.5063 15.8781 15.6169 15.8037 15.7098 15.71C15.8036 15.617 15.878 15.5064 15.9287 15.3845C15.9795 15.2627 16.0056 15.132 16.0056 15C16.0056 14.8679 15.9795 14.7372 15.9287 14.6154C15.878 14.4935 15.8036 14.3829 15.7098 14.29L13.4098 12L15.7098 9.70996C15.8036 9.61699 15.878 9.50639 15.9287 9.38453C15.9795 9.26267 16.0056 9.13197 16.0056 8.99996C16.0056 8.86795 15.9795 8.73724 15.9287 8.61538C15.878 8.49352 15.8036 8.38292 15.7098 8.28996ZM19.0698 4.92996C18.1474 3.97486 17.0439 3.21303 15.8239 2.68894C14.6038 2.16485 13.2916 1.88899 11.9638 1.87745C10.6361 1.86591 9.31926 2.11893 8.09029 2.62174C6.86133 3.12455 5.74481 3.86708 4.80589 4.80601C3.86696 5.74493 3.12443 6.86145 2.62162 8.09042C2.11881 9.31938 1.86579 10.6362 1.87733 11.964C1.88887 13.2918 2.16473 14.604 2.68882 15.824C3.21291 17.044 3.97473 18.1475 4.92984 19.07C5.8523 20.0251 6.95575 20.7869 8.17579 21.311C9.39583 21.8351 10.708 22.1109 12.0358 22.1225C13.3636 22.134 14.6804 21.881 15.9094 21.3782C17.1383 20.8754 18.2549 20.1328 19.1938 19.1939C20.1327 18.255 20.8752 17.1385 21.3781 15.9095C21.8809 14.6805 22.1339 13.3637 22.1223 12.0359C22.1108 10.7082 21.8349 9.39595 21.3109 8.17591C20.7868 6.95587 20.0249 5.85243 19.0698 4.92996ZM17.6598 17.66C16.3519 18.9694 14.6304 19.7848 12.7886 19.9673C10.9469 20.1497 9.09884 19.688 7.55936 18.6607C6.01987 17.6334 4.88419 16.1042 4.34581 14.3334C3.80742 12.5627 3.89964 10.6601 4.60675 8.94974C5.31386 7.23938 6.59211 5.82711 8.22373 4.95352C9.85534 4.07993 11.7394 3.79909 13.5548 4.15883C15.3703 4.51857 17.0049 5.49665 18.1801 6.92642C19.3553 8.35619 19.9984 10.1492 19.9998 12C20.0034 13.0512 19.7984 14.0928 19.3968 15.0643C18.9951 16.0359 18.4047 16.9181 17.6598 17.66Z" fill="black"></path>
                                      </g>
                                    </svg>
                                  </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                  <div class="share-item copy">
                                    <a href="#!" aria-label="Copy the property link">
                                      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="copy 1" clip-path="url(#clip0_302_1191)">
                                          <path id="Vector" d="M18.2227 30H7.03125C4.44649 30 2.34375 27.8973 2.34375 25.3125V9.43359C2.34375 6.84883 4.44649 4.74609 7.03125 4.74609H18.2227C20.8074 4.74609 22.9102 6.84883 22.9102 9.43359V25.3125C22.9102 27.8973 20.8074 30 18.2227 30ZM7.03125 7.08984C5.73898 7.08984 4.6875 8.14133 4.6875 9.43359V25.3125C4.6875 26.6048 5.73898 27.6562 7.03125 27.6562H18.2227C19.5149 27.6562 20.5664 26.6048 20.5664 25.3125V9.43359C20.5664 8.14133 19.5149 7.08984 18.2227 7.08984H7.03125ZM27.5977 22.3828V4.6875C27.5977 2.10274 25.4949 0 22.9102 0H9.90234C9.25507 0 8.73047 0.524597 8.73047 1.17188C8.73047 1.81915 9.25507 2.34375 9.90234 2.34375H22.9102C24.2024 2.34375 25.2539 3.39523 25.2539 4.6875V22.3828C25.2539 23.0301 25.7785 23.5547 26.4258 23.5547C27.0731 23.5547 27.5977 23.0301 27.5977 22.3828Z" fill="black"></path>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_302_1191">
                                            <rect width="30" height="30" fill="white"></rect>
                                          </clipPath>
                                        </defs>
                                      </svg> Copy Link </a>
                                    <div id="copyNotification" style="display: none;"> Link copied to clipboard! </div>
                                  </div>
                                  <div class="share-item email">
                                    <a href="#!">
                                      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Communication / message">
                                          <path id="Vector" d="M23.75 5H6.25C5.25544 5 4.30161 5.39509 3.59835 6.09835C2.89509 6.80161 2.5 7.75544 2.5 8.75V21.25C2.5 22.2446 2.89509 23.1984 3.59835 23.9017C4.30161 24.6049 5.25544 25 6.25 25H23.75C24.7446 25 25.6984 24.6049 26.4017 23.9017C27.1049 23.1984 27.5 22.2446 27.5 21.25V8.75C27.5 7.75544 27.1049 6.80161 26.4017 6.09835C25.6984 5.39509 24.7446 5 23.75 5ZM6.25 7.5H23.75C24.0815 7.5 24.3995 7.6317 24.6339 7.86612C24.8683 8.10054 25 8.41848 25 8.75L15 14.85L5 8.75C5 8.41848 5.1317 8.10054 5.36612 7.86612C5.60054 7.6317 5.91848 7.5 6.25 7.5ZM25 21.25C25 21.5815 24.8683 21.8995 24.6339 22.1339C24.3995 22.3683 24.0815 22.5 23.75 22.5H6.25C5.91848 22.5 5.60054 22.3683 5.36612 22.1339C5.1317 21.8995 5 21.5815 5 21.25V11.6L14.35 17.3125C14.54 17.4222 14.7556 17.48 14.975 17.48C15.1944 17.48 15.41 17.4222 15.6 17.3125L25 11.6V21.25Z" fill="black"></path>
                                        </g>
                                      </svg> Email </a>
                                  </div>
                                  <div class="share-item whatsapp">
                                    <a href="#!">
                                      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="whatsapp 1" clip-path="url(#clip0_302_1228)">
                                          <path id="Vector" d="M15.0037 0H14.9963C6.72563 0 0 6.7275 0 15C0 18.2812 1.0575 21.3225 2.85562 23.7919L0.98625 29.3644L6.75187 27.5213C9.12375 29.0925 11.9531 30 15.0037 30C23.2744 30 30 23.2706 30 15C30 6.72938 23.2744 0 15.0037 0Z" fill="#4CAF50"></path>
                                          <path id="Vector_2" d="M23.732 21.1818C23.3702 22.2037 21.9339 23.0512 20.7883 23.2987C20.0045 23.4656 18.9808 23.5987 15.5345 22.17C11.1264 20.3437 8.28766 15.8643 8.06641 15.5737C7.85453 15.2831 6.28516 13.2018 6.28516 11.0493C6.28516 8.89685 7.37828 7.84872 7.81891 7.39872C8.18078 7.02935 8.77891 6.8606 9.35266 6.8606C9.53828 6.8606 9.70516 6.86997 9.85516 6.87747C10.2958 6.89622 10.517 6.92247 10.8077 7.6181C11.1695 8.48997 12.0508 10.6425 12.1558 10.8637C12.2627 11.085 12.3695 11.385 12.2195 11.6756C12.0789 11.9756 11.9552 12.1087 11.7339 12.3637C11.5127 12.6187 11.3027 12.8137 11.0814 13.0875C10.8789 13.3256 10.6502 13.5806 10.9052 14.0212C11.1602 14.4525 12.0414 15.8906 13.3389 17.0456C15.0133 18.5362 16.3708 19.0125 16.8564 19.215C17.2183 19.365 17.6495 19.3293 17.9139 19.0481C18.2495 18.6862 18.6639 18.0862 19.0858 17.4956C19.3858 17.0718 19.7645 17.0193 20.162 17.1693C20.567 17.31 22.7102 18.3693 23.1508 18.5887C23.5914 18.81 23.882 18.915 23.9889 19.1006C24.0939 19.2862 24.0939 20.1581 23.732 21.1818Z" fill="#FAFAFA"></path>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_302_1228">
                                            <rect width="30" height="30" fill="white"></rect>
                                          </clipPath>
                                        </defs>
                                      </svg> Whats App </a>
                                  </div>
                                  <div class="share-item facebook">
                                    <a href="#!">
                                      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Group">
                                          <path id="Vector" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="#3B5998"></path>
                                          <path id="Vector_2" d="M18.7708 15.5866H16.0943V25.3923H12.039V15.5866H10.1104V12.1405H12.039V9.91046C12.039 8.31575 12.7965 5.8186 16.1304 5.8186L19.1342 5.83117V9.17621H16.9547C16.5972 9.17621 16.0945 9.35483 16.0945 10.1155V12.1437H19.1251L18.7708 15.5866Z" fill="white"></path>
                                        </g>
                                      </svg> Facebook </a>
                                  </div>
                                  <div class="share-item twitter">
                                    <a href="#!">
                                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Twitter" clip-path="url(#clip0_302_1226)">
                                          <path id="Vector" d="M8.75109 25.3808C19.3178 25.3808 25.0961 16.6267 25.0961 9.03584C25.0961 8.78718 25.0909 8.53959 25.0798 8.29329C26.2013 7.48237 27.1763 6.47044 27.9454 5.31858C26.9161 5.77616 25.8083 6.08399 24.6464 6.22306C25.8324 5.51169 26.7431 4.38675 27.1725 3.04562C26.0625 3.70358 24.8333 4.18167 23.5246 4.43995C22.4764 3.32334 20.9838 2.625 19.3312 2.625C16.1589 2.625 13.5862 5.19767 13.5862 8.36891C13.5862 8.81987 13.6367 9.25822 13.7351 9.67885C8.96065 9.43852 4.72685 7.15275 1.89377 3.67667C1.40052 4.52561 1.11597 5.51191 1.11597 6.56422C1.11597 8.55711 2.13025 10.3167 3.6724 11.346C2.72989 11.3169 1.84464 11.0582 1.07068 10.6275C1.06983 10.6517 1.06983 10.6752 1.06983 10.7008C1.06983 13.4831 3.0499 15.806 5.67875 16.3324C5.19596 16.4637 4.68797 16.5345 4.16395 16.5345C3.79438 16.5345 3.43421 16.4981 3.08408 16.4308C3.81553 18.7134 5.93638 20.3743 8.45073 20.4209C6.48454 21.962 4.00758 22.8799 1.31571 22.8799C0.852571 22.8799 0.39499 22.8534 -0.0546875 22.8005C2.48765 24.43 5.50679 25.381 8.7513 25.381" fill="#1DA1F2"></path>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_302_1226">
                                            <rect width="28" height="28" fill="white"></rect>
                                          </clipPath>
                                        </defs>
                                      </svg> Twitter </a>
                                  </div>
                                  <div class="share-item more">
                                    <a href="#" class="d-flex more-text align-items-center justify-content-center">
                                      <span class="me-2">
                                        <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g id="icon/see more 1">
                                            <path id="Vector" d="M1.96726 4.49747C0.879408 4.49747 0 3.61418 0 2.52341C0 1.43362 0.879408 0.550003 1.96726 0.550003C3.05252 0.550003 3.9329 1.4333 3.9329 2.52341C3.9329 3.61385 3.0522 4.49747 1.96726 4.49747Z" fill="#4D4C4C"></path>
                                            <path id="Vector_2" d="M1.96758 9.90048C0.879733 9.90048 0 9.01718 0 7.92642C0 6.83695 0.879408 5.95236 1.96726 5.95236C3.05252 5.95236 3.9329 6.83663 3.93355 7.92642C3.9329 9.01783 3.05188 9.90048 1.96758 9.90048Z" fill="#4D4C4C"></path>
                                            <path id="Vector_3" d="M1.96758 15.3038C0.879733 15.3038 0 14.4205 0 13.3298C0 12.239 0.879408 11.356 1.96726 11.356C3.05252 11.3554 3.9329 12.2393 3.9329 13.3298C3.9329 14.4202 3.05188 15.3038 1.96758 15.3038Z" fill="#4D4C4C"></path>
                                          </g>
                                        </svg>
                                      </span> More Options </a>
                                    <div class="d-flex other-share flex-wrap align-items-center">
                                      <a href="#!">
                                        <span>
                                          <svg width="20px" height="20px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="Color-" transform="translate(-300.000000, -260.000000)" fill="#CC2127">
                                                <path d="M324.001411,260 C310.747575,260 300,270.744752 300,284.001411 C300,293.826072 305.910037,302.270594 314.368672,305.982007 C314.300935,304.308344 314.357382,302.293173 314.78356,300.469924 C315.246428,298.522491 317.871229,287.393897 317.871229,287.393897 C317.871229,287.393897 317.106368,285.861351 317.106368,283.59499 C317.106368,280.038808 319.169518,277.38296 321.73505,277.38296 C323.91674,277.38296 324.972306,279.022755 324.972306,280.987123 C324.972306,283.180102 323.572411,286.462515 322.852708,289.502205 C322.251543,292.050803 324.128418,294.125243 326.640325,294.125243 C331.187158,294.125243 334.249427,288.285765 334.249427,281.36532 C334.249427,276.10725 330.707356,272.170048 324.263891,272.170048 C316.985006,272.170048 312.449462,277.59746 312.449462,283.659905 C312.449462,285.754101 313.064738,287.227377 314.029988,288.367613 C314.475922,288.895396 314.535191,289.104251 314.374316,289.708238 C314.261422,290.145705 313.996119,291.21256 313.886047,291.633092 C313.725172,292.239901 313.23408,292.460046 312.686541,292.234256 C309.330746,290.865408 307.769977,287.193509 307.769977,283.064385 C307.769977,276.248368 313.519139,268.069148 324.921503,268.069148 C334.085729,268.069148 340.117128,274.704533 340.117128,281.819721 C340.117128,291.235138 334.884459,298.268478 327.165285,298.268478 C324.577174,298.268478 322.138649,296.868584 321.303228,295.279591 C321.303228,295.279591 319.908979,300.808608 319.615452,301.875463 C319.107426,303.724114 318.111131,305.575587 317.199506,307.014994 C319.358617,307.652849 321.63909,308 324.001411,308 C337.255248,308 348,297.255248 348,284.001411 C348,270.744752 337.255248,260 324.001411,260" id="Pinterest"></path>
                                              </g>
                                            </g>
                                          </svg>
                                        </span>
                                      </a>
                                      <a href="#!">
                                        <span>
                                          <svg width="22px" height="22px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="24" cy="24" r="20" fill="#0077B5"></circle>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7747 14.2839C18.7747 15.529 17.8267 16.5366 16.3442 16.5366C14.9194 16.5366 13.9713 15.529 14.0007 14.2839C13.9713 12.9783 14.9193 12 16.3726 12C17.8267 12 18.7463 12.9783 18.7747 14.2839ZM14.1199 32.8191V18.3162H18.6271V32.8181H14.1199V32.8191Z" fill="white"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2393 22.9446C22.2393 21.1357 22.1797 19.5935 22.1201 18.3182H26.0351L26.2432 20.305H26.3322C26.9254 19.3854 28.4079 17.9927 30.8101 17.9927C33.7752 17.9927 35.9995 19.9502 35.9995 24.219V32.821H31.4922V24.7838C31.4922 22.9144 30.8404 21.6399 29.2093 21.6399C27.9633 21.6399 27.2224 22.4999 26.9263 23.3297C26.8071 23.6268 26.7484 24.0412 26.7484 24.4574V32.821H22.2411V22.9446H22.2393Z" fill="white"></path>
                                          </svg>
                                        </span>
                                      </a>
                                      <a href="#!">
                                        <span>
                                          <!--?xml version="1.0" encoding="utf-8"?-->
                                          <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                          <svg width="20px" height="20px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 2C8.27812 2 2 8.27812 2 16C2 23.7219 8.27812 30 16 30C23.7219 30 30 23.7219 30 16C30 8.27812 23.7219 2 16 2Z" fill="#FC471E"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0193 8.90951C20.0066 8.98984 20 9.07226 20 9.15626C20 10.0043 20.6716 10.6918 21.5 10.6918C22.3284 10.6918 23 10.0043 23 9.15626C23 8.30819 22.3284 7.6207 21.5 7.6207C21.1309 7.6207 20.7929 7.7572 20.5315 7.98359L16.6362 7L15.2283 12.7651C13.3554 12.8913 11.671 13.4719 10.4003 14.3485C10.0395 13.9863 9.54524 13.7629 9 13.7629C7.89543 13.7629 7 14.6796 7 15.8103C7 16.5973 7.43366 17.2805 8.06967 17.6232C8.02372 17.8674 8 18.1166 8 18.3696C8 21.4792 11.5817 24 16 24C20.4183 24 24 21.4792 24 18.3696C24 18.1166 23.9763 17.8674 23.9303 17.6232C24.5663 17.2805 25 16.5973 25 15.8103C25 14.6796 24.1046 13.7629 23 13.7629C22.4548 13.7629 21.9605 13.9863 21.5997 14.3485C20.2153 13.3935 18.3399 12.7897 16.2647 12.7423L17.3638 8.24143L20.0193 8.90951ZM12.5 18.8815C13.3284 18.8815 14 18.194 14 17.3459C14 16.4978 13.3284 15.8103 12.5 15.8103C11.6716 15.8103 11 16.4978 11 17.3459C11 18.194 11.6716 18.8815 12.5 18.8815ZM19.5 18.8815C20.3284 18.8815 21 18.194 21 17.3459C21 16.4978 20.3284 15.8103 19.5 15.8103C18.6716 15.8103 18 16.4978 18 17.3459C18 18.194 18.6716 18.8815 19.5 18.8815ZM12.7773 20.503C12.5476 20.3462 12.2372 20.4097 12.084 20.6449C11.9308 20.8802 11.9929 21.198 12.2226 21.3548C13.3107 22.0973 14.6554 22.4686 16 22.4686C17.3446 22.4686 18.6893 22.0973 19.7773 21.3548C20.0071 21.198 20.0692 20.8802 19.916 20.6449C19.7628 20.4097 19.4524 20.3462 19.2226 20.503C18.3025 21.1309 17.1513 21.4449 16 21.4449C15.3173 21.4449 14.6345 21.3345 14 21.1137C13.5646 20.9621 13.1518 20.7585 12.7773 20.503Z" fill="white"></path>
                                          </svg>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pagination d-flex mt-5 align-items-center justify-content-center">
                    <ul class="pagination flex-wrap">
                      <li data-page="1" class="active mb-2">1</li>
                      <li data-page="2" class="mb-2">2</li>
                      <li data-page="3" class="mb-2">3</li>
                      <li data-page="4" class="mb-2">4</li>
                      <li data-page="5" class="mb-2">5</li>
                    </ul>
                  </div>
                </div>

              </section>
              <div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="filtersModalLabel" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered">
            
                    <div class="modal-content">
            
                        <div class="modal-header">
            
                            <h5 class="modal-title" id="filtersModalLabel">Filter Properties</h5>
            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                        </div>
            
                        <div class="modal-body">
            
                            <form method="GET" action="">
            
                                <input type="hidden" name="search" value="">
            
                                <input type="hidden" name="town" value="">
            
                                <div class="mb-3">
            
                                    <label for="min_price" class="form-label">Min Price:</label>
            
                                    <input type="number" name="min_price" id="min_price" class="form-control" value="" placeholder="Min Price">
            
                                </div>
            
                                <div class="mb-3">
            
                                    <label for="max_price" class="form-label">Max Price:</label>
            
                                    <input type="number" name="max_price" id="max_price" class="form-control" value="" placeholder="Max Price">
            
                                </div>
            
                                <div class="mb-3">
            
                                    <label for="num_bedrooms" class="form-label">
                                        Bedrooms: 
                                        
                                    </label>
            
                                    <input type="number" name="bathrooms" id="rooms" class="form-control" value="" placeholder="number of Bedrooms">
            
                                </div>
            
                                <div class="modal-footer">
            
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            
                                    <button type="submit" class="btn btn-primary">Apply Filters</button>
            
                                </div>
            
                            </form>
            
                        </div>
            
                    </div>
            
                </div>
            
            </div>
            </div>

            <div class="col-md-4 col-12">
                
                <section class="most-searched-section">
                    <div class="container">
                        
                                    
                            
                            <div class="most-searched-urls">
                                <h2 class="recent-searches-heading">
                                    Recent Searches                
                                </h2>
                                <ul class="searches-list-sidebar">

                                    <li class="search-item-sidebar">
                                        <a class="recent-searches-a" href="#!">
                                            Properties for rent in Bahrain                            
                                        </a>
                                    </li>
                                                                                    
                                    <li class="search-item-sidebar">
                                        <a class="recent-searches-a" href="#!">
                                                Properties for sale in Bahrain                            
                                        </a>
                                    </li>
                                    <li class="search-item-sidebar">
                                        <a class="recent-searches-a" href="#!">
                                                Properties for sale in Juffair                            
                                        </a>
                                    </li>
                                    <li class="search-item-sidebar">
                                        <a class="recent-searches-a" href="#!">
                                            Two bedroom apartments for sale in Bahrain                            
                                        </a>
                                    </li>
                                    <li class="search-item-sidebar">
                                        <a class="recent-searches-a" href="#!">
                                            Villas for sale in Tala Island                            
                                        </a>
                                    </li>
                                                                                    
                                    <li class="search-item-sidebar">
                                        <a class="recent-searches-a" href="#!">
                                            Studio apartments for sale in Juffair                            
                                        </a>
                                    </li>
                                                    
                                </ul>
                            </div>
                    </div>
                </section>
                
                
                <section class="sidebar mt-5">

                    <div class="sidebar-banner mb-3">
                        <a href="">
                        </a>
                        <a href="#!">
                            <img src="assets/images/banner1.webp">
                        </a>
                    </div> 
                    <div class="sidebar-banner mb-3">
                        <a href="#!">
                            <img src="assets/images/banner2.webp">
                        </a>
                    </div>
                </section>			
            </div>
          </div>
          <section class="prop-page-content mt-5">
            <div class="inner-wrap p-4">
              <div class="content-heading d-flex flex-wrap flex-column align-items-center justify-content-center mb-4 pb-4">
                <img src="assets/images/archive-content.webp" class="img-fluid mb-2">
                <h1>Properties for sale in Saar</h1>
              </div>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Bahrain’s real estate market has various options for anyone who wants to invest. There are many advanced projects, particularly in Manama that provide excellent investment opportunities.</span>
              </p>
              <h2>
                <br>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Sarr is one of the areas that include a number of properties for sale. It is also one of the most highly populated and well-liked areas in the country. It is located west of Manama, the capital of Bahrain in the northern governorate.&nbsp;</span>
              </p>
              <h2>
                <br>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Saar is the ideal location to invest in the Kingdom. As it is a popular area for villas for sale and apartments for sale in Saar, so if you are looking for a distinct and luxurious life, Saar is what you are looking for.</span>
              </p>
              <h2>
                <b>Why invest in Real Estate?</b>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Real estate is a perfect way to invest. Property investments offer excellent return potential to protect you from recessions and other adverse economic downturns.</span>
              </p>
              <h2>
                <br>
              </h2>
              <h2>
                <b>Types of properties in Saar</b>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">People who are looking for buying properties in Bahrain. Saar is an ideal area to buy a property in Bahrain. Now you can search for properties for sale in Saar and buy one, as Bahraini laws allow foreigners to own freehold property in Bahrain.</span>
              </p>
              <h2>
                <br>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Expats can now invest in a wide range of properties in Saar Bahrain, ranging from apartments, villas, and land for sale in Saar. These properties also may be residential or commercial, furnished, unfurnished, or semi-furnished. For those looking for ready housing, furnished properties options are </span>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">preferable</span>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">, while unfurnished properties are more suitable for those who prefer to have their homes prepared the way they want. You will be able to find the right property for you, depending on your needs and budget.&nbsp;</span>
              </p>
              <h2>
                <br>
              </h2>
              <h2>
                <b>How to find properties for sale in Saar?</b>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">The Kingdom of Bahrain is working towards providing different types of housing options so that residents can easily find the apartment or villa they feel comfortable living in Bahrain. Many expats also benefit from property laws and invest in buying properties in the kingdom.</span>
              </p>
              <h2>
                <br>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">You can easily find options to choose from by searching through Weetas and taking advantage of the available smart search engine and filters. Use the filter to change the listed apartments according to the number of bedrooms, location, and price range to limit the results.</span>
              </p>
              <h2>
                <br>
              </h2>
              <h2>
                <b>What is the average price for properties for sale in Saar?</b>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Saar area has become one of the most vital regions in Bahrain. So, if you want to invest in <a data-mce-href="https://www.weetas.com/bh-en/properties-for-sale/apartments-for-sale-in-saar.html" href="https://www.weetas.com/bh-en/properties-for-sale/apartments-for-sale-in-saar.html">apartments for sale in Saar</a>, you can find a cozy semi-furnished flat with an average price of 56,000 BHD. If you are looking for land, you can buy land in a central location in Saar at a price of&nbsp; 78,705 BHD.&nbsp; </span>
              </p>
              <h2>
                <b>What attracts people to properties for sale in Saar?</b>
              </h2>
              <h3>
                <b>Lifestyle in Saar</b>
              </h3>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">It is one of the oldest areas in Bahrain with famous archaeological monuments, such as the Saar Temple, which was built in the era of Dilmun, and it contains ancient tombs.</span>
              </p>
              <h2>
                <br>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Saar’s location made it attractive to expats in Bahrain as it includes the most prestigious districts in Bahrain. It is also home to many complexes and residential buildings with luxury apartments and villas, and it is considered the business hub of the Kingdom, and very close to the borders of Saudi Arabia, making it easy to move from and to Saudi Arabia.</span>
              </p>
              <h2>
                <br>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Saar contains a range of facilities and amenities, Including mosques such as the Saar Grand Mosque and sports clubs such as Saar Sports Club and Bahrain Rugby Club. Moreover, there are a lot of entertainment hubs like Saar Mall. In addition to the universities, where there are campuses of the University of Bahrain Private University College. And also schools that include the Japanese school in the Japanese area.</span>
              </p>
              <h2>
                <br>
              </h2>
              <h3>
                <b>Healthcare facilities in Saar</b>
              </h3>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Bahrain provides high-quality healthcare services for all residents. Saar Bahrain has government and private hospitals, and it has a specialized and experienced medical staff. One of the most popular hospitals in Saar is the American Mission Hospital. It is a private non-profit hospital and provides&nbsp; 24/7 hours of specialized medical services and includes many specialties.</span>
              </p>
              <h2>
                <br>
              </h2>
              <h3>
                <b>Schools in Saar Bahrain</b>
              </h3>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">The Bahraini school system is divided into government and private schools. Expats are not allowed to attend public schools and have to attend private schools. There are many schools in Saar Bahrain, including St. Christopher's School Bahrain, Al Mahd Day Boarding School, the Budaiya Pre-School, Saar Nursery, and the Japanese School in Bahrain.</span>
              </p>
              <h2>
                <br>
              </h2>
              <h3>
                <b>Hotels in Saar</b>
              </h3>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">There are plenty of best places to stay in Saar, including The Ritz-Carlton Bahrain, which is located 7.2 km from the heart of Saar. Four Seasons Hotel Bahrain Bay and Blaire Executive Suites are also good options for your visit to Saar.&nbsp;</span>
              </p>
              <h2>
                <b>Weetas Real Estate</b>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Find the best offer for properties in Saar. Check out our listings of properties at different prices, categories, and levels, and in different locations in Saar area with <a data-mce-href="https://www.weetas.com/" href="https://www.weetas.com/">Weetas</a>. </span>
              </p>
              <h2>
                <br>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">To get better results, you can define the most important specifications for your desired property. Choose the property's maximum price, minimum price, type, and area as well. This will determine your search results and make it much easier to find the right property for your needs.</span>
              </p>
              <h2>
                <br>
              </h2>
              <p>
                <span style="font-weight: 400" data-mce-style="font-weight: 400;">Our sales team will provide you with better deals at special prices, try it yourself and contact us now. We are always ready to receive your calls and answer your inquiries.&nbsp;</span>
              </p>
              <h2>Saar properties for sale offer the perfect balance between affordability and lifestyle</h2>
              <p>For those looking for properties for sale in Saar, the area is full of a wide selection of real estate products that suits everybody's needs and requirements. Saar is considered an ideal place to live in especially for big families for it houses a wide array of top-notch schools, universities, restaurants, lounges, malls in addition to country clubs.</p>
              <h3>What to expect from living in Saar</h3>
              <p>Nakheel Center is a blissful and harmonious center in the heart of new Saar. Nakheel Centre is situated amidst a residential area in Saar and it is filled with numerous restaurants and cafes to cater to residents' needs.</p>
              <p>Also, Saar Mall is another attraction that sprawls over an area of 7500 square meters. The shopping mall comprises three stories and they are Basement, Ground &amp; First floor. The facility offers residents several market brands, restaurants, cafés, Carrefour supermarket, banks, indoor play area, big game zone, and a mini-cinema for kids.</p>
              <p>Saar Cultural &amp; Sports Club is recognized as a cultural center in the kingdom of Bahrain and a government supplement to Saar's youth that supports youth to thrive. <br>All of the above makes Saar the ideal community to live in, settle down and start a life for it provides residents with convenient access to all high-quality amenities and facilities. </p>
              <h3>A myriad of properties in Saar</h3>
              <p>What makes living in Saar appealing to almost everyone is its eclectic real estate scene that provides an extensive selection of properties for sale. One of the unique properties for sale in Saar is a luxury triplex 4 bedroom apartment that comes fully furnished with modern fittings, a large master bedroom with carpet flooring, fitted wardrobe, and luxurious en-suite bathroom, and all of that for the cost of 85,000 BHD.</p>
              <p>Another sought-after property amongst the high-end properties for sale in Saar is a fully furnished villa built with a unique interior design and includes very spacious sitting and living areas. The villa also has a private swimming pool, laundry room, maid's room, 4 very spacious bedrooms with an en-suite bathroom, and two balconies. Sprawling over a total area of 570 square meters, the villa is for sale for 350,000 BHD.</p>
              <p>And if you are looking for a bigger property, then you will surely fancy this villa. With a modern lavish living area, this villa is conveniently located near the highway and a few minutes off key areas such as schools, grocery stores, restaurants. The villa has 6 bedrooms, 9 bathrooms, an indoor pool, private elevator, in addition to a spacious garage. This fully furnished villa comes with meticulously selected furnishing and light fixtures and it is for sale for 330,000 BHD.</p>
              <h3>Reserve your property</h3>
              <p>If you are interested in owning a property in Saar, then Weetas Real Estate is your go-to. A professional realtor with a team of professionals, Weetas agents are experts in finding the ideal property for investors in all of Bahrain that suits their needs, wants, and requirements and provides them with the kind of lifestyle that matches them.</p>
            </div>
          </section>
          <section class="prop-faq mt-5">
            <h2 class="mb-4">Frequently Ask Questions</h2>
            <div class="accordion" id="faq-section">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#faq-0" aria-expanded="true" aria-controls="faq-0"> Can foreigners buy property in Bahrain? </button>
                </h2>
                <div id="faq-0" class="accordion-collapse collapse show" data-bs-parent="#faq-section">
                  <div class="accordion-body"> Yes. However, you can only buy freehold properties. Before you take any steps in that way, consult with your real estate lawyer or office regarding the areas where foreign property ownership is allowed. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="true" aria-controls="faq-1"> What are the top attractions in Saar? </button>
                </h2>
                <div id="faq-1" class="accordion-collapse collapse " data-bs-parent="#faq-section">
                  <div class="accordion-body"> Saar’s main attractions are: King Fahd Causeway. El Mercado Janabiya. Saar Mall. Virtual Reality Gaming Center. </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
    </main>
</template>

<script>

    export default {

    

}
</script>

<style lang="scss" scoped>


</style>
