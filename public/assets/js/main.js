( function( $ ) {
    window.weetasMain = {
        init: function () {
            this.shareToggler();
            this.swiperSlider();
            this.sortSelect();
            this.pagination();
            this.propPopup();
            this.clearPopups();
            this.singleMap();
            this.headerMenu();
            this.mobileMenu();
            this.singleGallery();
            this.propertyControl();
            this.addToFav();
            this.propInquiry();
            this.propReport();
        },

                    submitInquiry: function (id, phone, callback, errorCallback) {
                $('#inquiryForm').find('.phone').val(phone);
            
                $.ajax({
                    type: "POST",
                    url: weetas.ajax_url,
                    data: $('#inquiryForm').serialize() + '&id='+id,
                    success: function(ret){
                        callback(ret);
            
                        $('#inquiryForm')[0].reset();  
                    },
                    error: function(e) {
                        errorCallback(e?.responseJSON);
                    }
                });
            },
            submitReport: function (id, phone, callback, errorCallback) {
                $('#reportForm').find('.phone').val(phone);
            
                $.ajax({
                    type: "POST",
                    url: weetas.ajax_url,
                    data: $('#reportForm').serialize() + '&id='+id,
                    success: function(ret){
                        callback(ret);
            
                        $('#reportForm')[0].reset(); 
                    },
                    error: function(e) {
                        errorCallback(e?.responseJSON);
                    }
                });
            },

        addInquiryError: function (message) {
            const modelPopup = $('#inquiryModal');
            modelPopup.find('.alert-success').addClass('d-none');
            modelPopup.find('.alert-danger').removeClass('d-none');
            modelPopup.find('.alert-danger').find('div').html( message )
        },
        addInquirySuccess: function (message) {
            const modelPopup = $('#inquiryModal');
            modelPopup.find('.alert-danger').addClass('d-none');
            modelPopup.find('.alert-success').removeClass('d-none');
            modelPopup.find('.alert-success').find('div').html( message )
        },
        clearInquiryPopup: function () {
            const modelPopup = $('#inquiryModal');
            modelPopup.find('.alert-danger').addClass('d-none');
            modelPopup.find('.alert-success').addClass('d-none');
            modelPopup.find('.submit').prop('disabled', false);
            modelPopup.find('textarea').val('');
        },
        propInquiry: function () {
            const that = this;
            const modelPopup = $('#inquiryModal');
            const modal = new bootstrap.Modal('#inquiryModal', {
                keyboard: true
            });
            const input = document.querySelector("#inquiryPhone");
            let telInput = window.intlTelInput(input, {
                initialCountry: modelPopup.data('country'),
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js",
            });
            $.fn.ignore = function(sel){
                return this.clone().find(sel||">*").remove().end();
            };
            $('.prop-inqure').each( function () {
                let btn = $(this);
                let id = $(this).data('id');
                $(this).removeClass('disabled');
                btn.on( 'click', function (e) {
                    e.preventDefault();
                    that.clearInquiryPopup();
                    id = $(this).data('id');
                    let property = $('#property-'+$(this).data('id'));
                    let firstImage = property.find('.swiper.main').first().find('.swiper-slide:first-child');
                    let content = property.find('.content-wrap').first().ignore('.property-footer').html();
                    modelPopup.find( '.modal-image' ).html(firstImage.html());
                    modelPopup.find( '.modal-data' ).html(content);
                    modal.show();
                    modelPopup.find('.submit').off('click').on( 'click', function (e) {
                        modelPopup.find('.alert-danger').addClass('d-none');
                        modelPopup.find('.alert-success').addClass('d-none');
                        if( ! telInput.isValidNumber() ) {
                            that.addInquiryError( weetas.translations.wrongPhone );
                        } else {
                            modelPopup.find('.submit').prop('disabled', true);
                            that.submitInquiry( id, telInput.getNumber(), (data) => {
                                that.addInquirySuccess(data?.data?.message);
                            }, (e) => {
                                that.addInquiryError( e?.data?.message );
                                modelPopup.find('.submit').prop('disabled', false);
                            } )
                        }
                    } )
                } );

            } )
        },
        addReportError: function (message) {
            const modelPopup = $('#reportModal');
            modelPopup.find('.alert-success').addClass('d-none');
            modelPopup.find('.alert-danger').removeClass('d-none');
            modelPopup.find('.alert-danger').find('div').html( message )
        },
        addReportSuccess: function (message) {
            const modelPopup = $('#reportModal');
            modelPopup.find('.alert-danger').addClass('d-none');
            modelPopup.find('.alert-success').removeClass('d-none');
            modelPopup.find('.alert-success').find('div').html( message )
        },
        clearReportopup: function () {
            const modelPopup = $('#reportModal');
            modelPopup.find('.alert-danger').addClass('d-none');
            modelPopup.find('.alert-success').addClass('d-none');
            modelPopup.find('.submit').prop('disabled', false);
            modelPopup.find('textarea').val('');
        },
        propReport: function () {
            const that = this;
            const modelPopup = $('#reportModal');
            const modal = new bootstrap.Modal('#reportModal', {
                keyboard: true
            });
            const input = document.querySelector("#reportPhone");
            let telInput = window.intlTelInput(input, {
                initialCountry: modelPopup.data('country'),
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js",
            });
        
            $('.report').on('click', function(e) {
                e.preventDefault();
                console.log("Report link clicked!"); 
                modal.show(); 
                that.clearReportopup(); 
            });
        
            $('.report').each(function () {
                let btn = $(this);
                let id = $(this).data('id');
                $(this).removeClass('disabled');
                btn.on('click', function (e) {
                    e.preventDefault();
                    that.clearReportopup();
                    id = $(this).data('id');
                    let property = $('#property-' + $(this).data('id'));
                    let firstImage = property.find('.swiper.main').first().find('.swiper-slide:first-child');
                    let content = property.find('.content-wrap').first().ignore('.property-footer').html();
                    modelPopup.find('.modal-image').html(firstImage.html());
                    modelPopup.find('.modal-data').html(content);
                    modal.show();
                    modelPopup.find('.submit').off('click').on('click', function (e) {
                        modelPopup.find('.alert-danger').addClass('d-none');
                        modelPopup.find('.alert-success').addClass('d-none');
                        if (!telInput.isValidNumber()) {
                            that.addReportError(weetas.translations.wrongPhone);
                        } else {
                            modelPopup.find('.send-report-button').prop('disabled', true);
                            that.submitReport(id, telInput.getNumber(), (data) => {
                                that.addReportSuccess(data?.data?.message);
                            }, (e) => {
                                that.addReportError(e?.data?.message);
                                modelPopup.find('.send-report-button').prop('disabled', false);
                            });
                        }
                    });
                });
            });
        },

        
        addToFav: function () {
            $('.fav-action').each( function () {
                let that = $(this);
                $(this).on( 'click', function (e) {
                    e.preventDefault();
                    let id = $(this).data('id');
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: weetas.ajax_url,
                        data: {
                            action: "weetas_add_tofav",
                            propId: id,
                            nonce: weetas.nonce
                        },
                        success: function(ret){
                            if( ret?.success ) {
                                if( ret?.data?.removed ) {
                                    that.removeClass( 'active' )
                                } else {
                                    that.addClass( 'active' )
                                }
                            }
                        }
                    });
                } );
            } );
        },
        propertyControl: function () {
            if( ! $('.mobile-control').length ) {
                return;
            }
            $(window).on( 'scroll', function () {
                let el = $('.mobile-control').offset();
                if( $(window).scrollTop() >= el.top ) {
                    $('.mobile-control').addClass('top');
                } else {
                    $('.mobile-control').removeClass('top');
                }
            } )
        },
        mobileMenu: function () {
            $('.navbar-toggler').on( 'click', function (e) {
                $('.offcanvas-menu').addClass( 'show' );
                $('.overlay').removeClass('d-none');
                jQuery('.navbar-collapse').collapse('show');
            } );
            $('.close-offcanvas').on( 'click', function (e) {
                e.preventDefault();
                $('.overlay').addClass('d-none');
                $('.offcanvas-menu').removeClass( 'show' );
            } )
        },
        headerMenu: function () {
            (function($bs) {
                const CLASS_NAME = 'has-child-dropdown-show';
                $bs.Dropdown.prototype.toggle = function(_orginal) {
                    return function() {
                        document.querySelectorAll('.' + CLASS_NAME).forEach(function(e) {
                            e.classList.remove(CLASS_NAME);
                        });
                        let dd = this._element.closest('.dropdown').parentNode.closest('.dropdown');
                        for (; dd && dd !== document; dd = dd.parentNode.closest('.dropdown')) {
                            dd.classList.add(CLASS_NAME);
                        }
                        return _orginal.call(this);
                    }
                }($bs.Dropdown.prototype.toggle);

                document.querySelectorAll('.dropdown').forEach(function(dd) {
                    dd.addEventListener('hide.bs.dropdown', function(e) {
                        if (this.classList.contains(CLASS_NAME)) {
                            this.classList.remove(CLASS_NAME);
                            e.preventDefault();
                        }
                        e.stopPropagation(); // do not need pop in multi level mode
                    });
                });

                // for hover
                if( jQuery(window).width() > 992 ) {
                    document.querySelectorAll('.dropdown').forEach(function(dd) {
                        dd.addEventListener('mouseenter', function(e) {
                            let toggle = e.target.querySelector(':scope>[data-bs-toggle="dropdown"]');
                            if (!toggle.classList.contains('show')) {
                                $bs.Dropdown.getOrCreateInstance(toggle).toggle();
                                dd.classList.add(CLASS_NAME);
                            } else {
                                $bs?.Dropdown?.clearMenus();
                            }
                        });
                        dd.addEventListener('mouseleave', function(e) {
                            let toggle = e.target.querySelector(':scope>[data-bs-toggle="dropdown"]');
                            if (toggle.classList.contains('show')) {
                                $bs.Dropdown.getOrCreateInstance(toggle).toggle();
                            }
                        });
                    });
                }

                document.querySelectorAll('.dropdown').forEach(function(dd) {
                    dd.addEventListener('click', function (e) {
                        let toggle = e.target;
                        if( jQuery(window).width() > 992 ) {
                            window.location.href = e.target.getAttribute('href');
                        }
                        if (!toggle.classList.contains('show')) {
                            window.location.href = e.target.getAttribute('href');
                        }
                    });
                });

            })(bootstrap);
        },
        shareToggler: function () {
            if( ! $('.property-footer').length  ) {
                return;
            }
            $('.property-footer').each( function () {
                let property = this;
                $(property).find('.property-mb').on( 'click', function (e) {
                    e.preventDefault();
                    $(property).find('.property-menu').toggleClass('d-none');
                } );
            } )
        },
        swiperSlider: function () {
    const that = this;

    $('.prop-gallery').each(function () {
        const swiper = new Swiper($(this).find('.swiper.main')[0], {
            slidesPerView: 1,
            navigation: {
                nextEl: $(this).find('.swiper-button-next')[0],
                prevEl: $(this).find('.swiper-button-prev')[0],
            },
            pagination: {
                el: $(this).find('.swiper-pagination')[0],
                clickable: true,
            },
        });
    });

    $('.swiper-gallery').each(function () {
        const swiper = new Swiper($(this).find('.swiper')[0], {
            slidesPerView: 1,
            navigation: {
                nextEl: $(this).find('.swiper-button-next')[0],
                prevEl: $(this).find('.swiper-button-prev')[0],
            },
            pagination: {
                el: $(this).find('.swiper-pagination')[0],
                clickable: true,
            },
        });
    });
},


        clearPopups: function () {
          const clears = () => {
              $('.property-menu').addClass('d-none');
              $('.overlay').addClass('d-none');
              $('.share-popup').addClass('d-none');
              $('#reportModal').addClass('d-none');
          }
          $('.overlay').on( 'click', function () {
              clears();
          } );
          $('#page').on( 'click', function (e) {
              let className = e.target.className;
              if( className !== 'property-mb' && typeof className !== 'object') {
                  $('.property-menu').addClass('d-none');
              }
          })
        },
        urlArg: function (param, value) {
            let url = window.location.href;
            let pattern = new RegExp('(' + param + '=).*?(&|$)');
            if (url.match(pattern)) {
                let newUrl = url.replace(pattern, '$1' + value + '$2');
                return newUrl;
            }
            if( url.indexOf('?') !== -1 ) {
                return (url + '&' + param + '=' + value);
            } else {
                return  (url + '?' + param + '=' + value);
            }
        },
        pagination: function () {
            const that = this;
            $('.pagination li').on( 'click', function (e) {
                window.location.href = that.urlArg('start', $(this).data('page'))
            } )
        },
        sortSelect: function () {
            const that = this;
            if( $('#sort-by').length ) {
                $('#sort-by').on( 'change', function (e) {
                    let url = window.location.href;
                    let param = 'sort_by';
                    window.location.href = that.urlArg( param, e.target.value );
                } );
            }
        },
        propPopup:async function () {
            const that = this;
            $('.property').each( function () {
                const prop = $(this);
                prop.find('.share').on( 'click', function (e) {
                    prop.find('.share-popup').toggleClass('d-none');
                    $('.overlay').toggleClass('d-none')
                } );
                prop.find( '.prop-number' ).on( 'click', function (e) {
                    e.preventDefault();
                    $(this).toggleClass('show');
                } )
                prop.find('.property-share .close').on('click', function () {
                    prop.find('.share-popup').addClass('d-none');
                    $('.overlay').addClass('d-none')
                });
                prop.find('.report').on('click', function(e){
                    prop.find('#reportModal').toggleClass('d-none');
                    $('.overlay').toggleClass('d-none')
                });
                prop.find('.copy a').on('click', async function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                
                    const target = event.currentTarget;
                    const url = target.getAttribute('href');
                    console.log('Copy button clicked. URL:', url);
                
                    if (!url || url.trim() === "") {
                        console.error("No URL found to copy!");
                        alert("Failed to copy the link: No URL available.");
                        return;
                    }
                    
                    try {
                        await navigator.clipboard.writeText(url);
                        console.log("Link copied to clipboard:", url);
                        alert("Link copied to clipboard!");
                    } catch (err) {
                        console.error("Clipboard write failed:", err);
                        alert("Failed to copy the link. Please try again.");
                    }
                });

                
                prop.find( '.share-item:not(.copy):not(.more) a' ).on( 'click', function (e) {
                    e.preventDefault();
                    window.open($(this).attr('href'), 'sharewindow','left=20,top=20,width=600,height=700,toolbar=0,resizable=1');
                    return false;
                } )
                prop.find('.more-text').on( 'click', function (e) {
                    e.preventDefault();
                    $(this).addClass('d-none');
                    prop.find('.more').addClass('show');
                } )
                prop.find('.other-share a').on( 'click', function (e) {
                    e.preventDefault();
                    window.open($(this).attr('href'), 'sharewindow','left=20,top=20,width=600,height=700,toolbar=0,resizable=1');
                } )
            } )
        },
        singleGallery: function () {
            const thumbs = new Swiper($('.prop-gallery .thumbs')[0], {
                spaceBetween: 10,
                slidesPerView: 10,
                freeMode: false,
                watchSlidesProgress: true,
            });
        
            const slider = new Swiper($('.prop-gallery .main')[0], {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: thumbs, 
                },
            });
        },

        singleMap: function () {
            $('#show-map').on( 'click', function (e) {
                e.preventDefault();
                $('.prop-location').addClass('show');
                setTimeout( function () {
                    $('.m-overlay').addClass('d-none')
                }, 300 )
            } )
        }
    }

    window.weetasMain.init();
}( jQuery ) );

