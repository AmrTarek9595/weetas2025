( function( $ ) {

    window.weetasSearch = {
        data: {
            city: "",
            ctype: weetas.search_args.ctype !== '' ? weetas.search_args.ctype : "sale",
            btype: weetas.search_args.btype !== '' ? weetas.search_args.btype : "all",
            ftype: "",
            bedcount: "",
            minprice: "",
            maxprice: "",
            keyword: weetas.search_args.location
        },

        searchResults: $('#search-results'),

        init: function () {
            this.SearchBeds();
            this.searchTowns();
            this.searchTabs();
            this.searchType();
            this.clearTownClick();
            this.handleSearhSubmit();
            this.retrurnForm();
        },
        retrurnForm:function(){
            


        },
        handleSearchClick: function (item, type) {
          $(item).addClass('active');
          this.data[type] = $(item).data('id');
        },

        handleSearhSubmit: function () {
            const that = this;
            $('#seaech-form').on('submit', function (e) {
                let searchLink = that.buildSearchLink();
                e.preventDefault();
                window.location.href = searchLink;
            })
        },

        buildSearchLink: function () {
          let base = weetas.home_url+'/'+weetas.lang;
          base += '/properties-for-'+this.data.ctype;
          if( this.data.btype !== 'all' ) {
              base += '/'+this.data.btype+'-for-'+this.data.ctype+'-in-';
          }
          if(this.data.keyword !== '') {
              base += this.data.btype === 'all' ? '/' : '';
              base += this.data.keyword;
          } else if( this.data.btype !== 'all' ) {
              base += 'bahrain';
          }
          base +='.html';

          return base;
        },

        searchTabs: function () {
            const that = this;
            $('.search-tabs li').on( 'click', function() {
                $('.search-tabs li.active').removeClass('active');
                that.handleSearchClick(this, 'ctype');
            } );
        },
        searchType: function () {
            const that = this;
            $('#search-btype li').on( 'click', function () {
                $('#search-btype li.active').removeClass('active');
                that.handleSearchClick(this, 'btype');
            } );
        },

        renderSearchResults: function(results) {
           let out = '<ul>';
           results.map( (item) => {
               let label = weetas.lang === 'ar' ? item.value_ar : item.value;
               out += `<li data-id="${item.alias}">${label}</li>`
           } )
           out += '</ul>';

           return out;
        },

        townClick: function () {
            const that = this;
            $('#search-results ul li').off('click');
            $('#search-results ul li').on( 'click', function (e) {
                e.preventDefault();
                $('#town-search').val($(this).html());
                that.data.keyword = $(this).data('id');
                that.searchResults.removeClass('d-block').addClass('d-none');
            } );
        },

        clearTownClick: function () {
            const that = this;
            $('#page').on( 'click' , function(e) {
                if( e.target.id !== 'search-results' && e.target.id !== 'town-search' ) {
                    that.searchResults.removeClass('d-block').addClass('d-none');
                }
            } )
        },
        SearchBeds: function() {
            let $input = $('#bedrooms');
            let timer,
                that = this,
                timerInterval = 500,
                isSearching = false;
            const doSearch = function() {
                if (isSearching) {
                    return;
                }
                return $.ajax({
                    url: weetas.ajax_url,
                    type: "POST",
                    data: {
                        action: "weetas_search_bedrooms",
                        nonce: $input.data('nonce'),
                        bedrooms: $input.val() 
                    },
                    success: function(resp) {
                        isSearching = false;
                        that.searchResults.removeClass('d-none').addClass('d-block');
                        that.searchResults.html(that.renderSearchResults(resp.data));
                        that.townClick();
                    }
                });
            };

            $input.on('change', function() {
                clearTimeout(timer);
                timer = setTimeout(doSearch, timerInterval);
            });
        },

        searchTowns: function() {
            let $input = $('#town-search');
            let timer,
                that = this,
                timerInterval = 500,
                isSearching = false;
            const doSearch= function() {
                if( isSearching ) {
                    return;
                }
                return $.ajax({
                   url: weetas.ajax_url,
                   type: "POST",
                   data: {
                       action: "weetas_search_city",
                       nonce: $input.data('nonce'),
                       keyword: $input.val()
                   },
                   success: function (resp) {
                       isSearching = false;
                       that.searchResults.removeClass('d-none').addClass('d-block')
                       that.searchResults.html(that.renderSearchResults(resp.data));
                       that.townClick();
                   }
                });
            };

            $input.on( 'keyup', function () {
                clearTimeout(timer);
                timer = setTimeout( doSearch, timerInterval );
            } );
            $input.on( 'keydown', function() {
                clearTimeout(timer);
            } );

            $input.on( 'focus', function (e) {
                that.searchResults.removeClass('d-none').addClass('d-block');
            } )
            $input.on( 'keypress', function (ev) {
                let keycode = (ev.keyCode ? ev.keyCode : ev.which);

                if (keycode == '13') {
                    clearTimeout(timer);
                    doSearch();
                    isSearching = true;
                }
            } );
        }
    }
    window.weetasSearch.init();
}( jQuery ) );