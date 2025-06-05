$(document).ready(function() {
    $(window).on('load', function() {
        if (localStorage.getItem('loaderShown') === null) {
            $('body').addClass('loading');
            setTimeout(function() {
                $('#load').fadeOut(function() {
                    $('.wrapper').fadeIn();
                    $('body').removeClass('loading');
                    localStorage.setItem('loaderShown', 'true');
                });
            }, 1000);
        } else {
            $('#load').hide();
            $('.wrapper').show();
        }
    });
    $('.menubar').click(function() {
        $('.responsive__header').addClass('active');
    });

    $('.cross__logo img').click(function() {
        $('.responsive__header').removeClass('active');
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('header').addClass("sticky");
        } else {
            $('header').removeClass("sticky");
        }
    });

    let SwiperTop = new Swiper('.swiper--top', {
        spaceBetween: 0,
        centeredSlides: true,
        speed: 6000,
        autoplay: {
            delay: 1,
        },
        loop: true,
        slidesPerView: 'auto',
        allowTouchMove: false,
        disableOnInteraction: true
    });

    $('.btn').on('mouseenter', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({ top: relY, left: relX });
    }).on('mouseout', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({ top: relY, left: relX });
    });

    $(".accordian__trigger").click(function() {
        $(".accordian__trigger").removeClass("active");
        $(".accordian__content").slideUp();
        $(this).next().slideDown();
        $(this).addClass("active");
        $(".questions__ans").removeClass("border--black");
        $(this).parent().addClass("border--black");
    });


    const checkinInput = document.getElementById('checkin_date');
    const checkoutInput = document.getElementById('checkout_date');
    const totalDaysInput = document.getElementById('total_days');
    const totalRentInput = document.getElementById('total_rent');
    const ratePerDay = 2400;

    function calculateStay() {
        const checkinDate = new Date(checkinInput.value);
        const checkoutDate = new Date(checkoutInput.value);


        if (checkinInput.value && checkoutInput.value) {
            if (checkoutDate < checkinDate) {
                // If checkout is before checkin, show error or reset fields
                totalDaysInput.value = '';
                totalRentInput.value = '';
                alert("Check-Out Date cannot be before Check-In Date.");
                checkoutInput.value = '';
                return;
            }



            // Calculate difference in milliseconds
            const diffTime = checkoutDate - checkinDate;

            // Convert milliseconds to days
            let diffDays = diffTime / (1000 * 60 * 60 * 24);

            // If both dates are same day, count as 1 day stay
            if (diffDays === 0) diffDays = 1;

            totalDaysInput.value = diffDays;
            totalRentInput.value = "₹" + (diffDays * ratePerDay).toLocaleString();
        }
    }

    checkinInput.addEventListener('change', calculateStay);
    checkoutInput.addEventListener('change', calculateStay);


    document.getElementById('checkin_date').addEventListener('change', getAvailableRooms);
    document.getElementById('checkout_date').addEventListener('change', getAvailableRooms);

    async function getAvailableRooms() {
        const checkin = document.getElementById('checkin_date').value;
        const checkout = document.getElementById('checkout_date').value;

        if (!checkin || !checkout) return;

        const response = await fetch("{{ route('available.rooms') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ checkin_date: checkin, checkout_date: checkout })
        });

        const rooms = await response.json();
        const select = document.getElementById('room_number');
        select.innerHTML = '<option value="">-- Select Available Room --</option>';

        rooms.forEach(room => {
            select.innerHTML += `<option value="${room}">${room}</option>`;
        });
    }





});