@extends('layouts.app')

@section('title', 'Book Room')
@section('css_links')
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('css/book_room.css') }}">
@endsection
@section('content')
    <form action="" id="select-room-form" class="d-flex flex-wrap col-12">
        <div class="d-flex flex-wrap col-12 justify-content-center main-basic-details-div">
            <div class="d-flex flex-wrap col-md-8 col-12  basic-details-div">
                <div class="d-flex col-md-5 col-9 basic-details-div-1">
                    <button type="button" class="col-1"><i class="fa-solid fa-calendar-days"></i></button>
                    <div class="col-10">
                        <p>Check-in Check-out</p>
                        <h3 id="check-in-out-date">Sat 04 May - Sun 05 May</h3>
                    </div>
                    <button type="button" class="col-1" id="open-check-btn"><i
                            class="fa-solid fa-caret-down"></i></button>
                </div>
                <div class="d-flex flex-wrap col-md-5 col-9 basic-details-div-1">
                    <button type="button" class="col-1"><i class="fa-solid fa-person"></i></button>
                    <div class="col-10">
                        <p>Rooms & Person</p>
                        <h3>1 Room & 2Person</h3>
                    </div>
                    <button type="button" class="col-1" id="open-room-dialog"><i
                            class="fa-solid fa-caret-down"></i></button>
                </div>
            </div>
            <input type="text" name="datefilter" value="" id="date_input" style="display: none;" />
            <div class="d-flex flex-wrap col-12 justify-content-center" id="datePickerContainer">

            </div>
            <div class="d-flex flex-wrap col-12 room-person-count-div">
                <div class="d-flex flex-wrap col-md-7 col-11 room-person-count-scroll-div">
                    <div class="d-flex flex-wrap col-12 room-person-count-div-1 room-person-radius" id="">
                        <div class="d-flex flex-wrap col-12 room-person-count-head">
                            <div class="d-flex flex-wrap room-person-count-head-1">
                                <span>Room</span>
                                <span>1</span>
                            </div>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </div>
                        <div class="d-flex flex-wrap col-12 room-person-count-content">
                            <div class="d-flex flex-wrap col-11 room-person-count-content-1">
                                <p class="col-md-5 col-12">Number Of Adults</p>
                                <div class="d-flex flex-wrap col-md-5 col-12 room-person-count-content-2">
                                    <button><i class="fa-solid fa-minus"></i></button>
                                    <p id="number-of-adult">2</p>
                                    <input type="number" style="display: none;">
                                    <button><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap col-11 room-person-count-content-1">
                                <p class="col-md-5 col-12">Number Of Child</p>
                                <div class="d-flex flex-wrap col-md-5 col-12 room-person-count-content-2">
                                    <button><i class="fa-solid fa-minus"></i></button>
                                    <p id="number-of-child">2</p>
                                    <input type="number" style="display: none;">
                                    <button><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-md-7 col-11 room-person-add-div">
                    <button><span><i class="fa-solid fa-plus"></i></span> <span>New Room</span></button>
                    <button><span><i class="fa-solid fa-check"></i></span> <span>Done</span></button>
                </div>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias voluptate tenetur quibusdam
                    exercitationem
                    provident illum nulla quod aliquid iste nihil! Nisi itaque in distinctio possimus tempora cum? Dicta
                    possimus ipsam unde repudiandae doloribus similique amet repellat iste rerum dolorum. Eveniet magnam
                    molestias architecto natus nobis amet. Veritatis, quis quia. Natus ducimus, asperiores sapiente voluptas
                    voluptates ex quo veniam repellendus. Porro officia iste, nisi vel nihil numquam similique consequuntur
                    sed
                    libero tempora, tenetur quo neque nemo rerum explicabo delectus perspiciatis praesentium illo asperiores
                    quod laborum deserunt quae qui? Voluptatibus nostrum nemo nulla beatae, in aliquid dolorum fugiat
                    praesentium ut a voluptatum recusandae dicta ipsum fugit facere quidem quis iure? Architecto dicta magni
                    labore perspiciatis, dolorem fugiat recusandae natus itaque nisi vel dolor deleniti tenetur. Nam quae
                    alias
                    amet numquam incidunt, similique sint fuga omnis enim dolore, nulla quis ullam repudiandae. Facere rem
                    laboriosam sint blanditiis? Sequi consequatur, nostrum debitis totam cupiditate velit? Dolorem
                    perferendis
                    assumenda quia animi fugit repellat, adipisci ab hic qui, culpa itaque reprehenderit porro ullam rem.
                    Sed
                    impedit modi nam tenetur necessitatibus nostrum tempore praesentium eius. Rem, sed veritatis? Distinctio
                    obcaecati rerum quos consequatur officiis tempore nulla! Fugit adipisci, odio tempore voluptates et est
                    amet, mollitia eaque nostrum consectetur atque explicabo vitae perferendis ad suscipit labore quidem
                    dolorem
                    tenetur harum possimus perspiciatis beatae? Vel commodi delectus necessitatibus quod praesentium culpa
                    ducimus autem, officiis perspiciatis ea consequatur, nam expedita inventore temporibus veritatis ut rem
                    natus soluta hic obcaecati dolores? Corrupti ea perspiciatis ducimus qui nesciunt deleniti possimus
                    error
                    voluptates a magni. Excepturi numquam doloremque, earum quisquam atque quia cupiditate dolores illum
                    dolorem
                    mollitia non blanditiis possimus repellendus molestiae, quaerat tempora eum quis suscipit! Veniam optio
                    laboriosam voluptatum fugit ipsa ipsum dolor enim, nobis nesciunt quaerat? Adipisci, autem dolore.
                    Accusantium ab eum illo repellat ipsa nemo atque, natus eveniet rerum voluptate dolore pariatur
                    explicabo
                    optio corrupti asperiores quaerat itaque delectus neque quibusdam amet nihil, nulla deserunt voluptatem!
                    Ullam dolor officiis quae nulla ab id, nisi fuga doloremque doloribus, nesciunt eos, quis suscipit omnis
                    vero iure temporibus porro dignissimos sit consequuntur placeat assumenda! Ullam similique adipisci,
                    iste
                    iure inventore, quod voluptas modi dolorem doloribus neque mollitia sit delectus illo aperiam provident
                    tenetur est nulla facilis dolore! Nemo praesentium alias, porro at iusto minima ducimus magni molestiae
                    nulla incidunt unde modi sequi amet voluptatem! Autem consequatur optio nesciunt mollitia. Voluptas
                    facilis
                    cum laboriosam vitae ipsum molestiae, veniam laborum fuga voluptates quam nostrum maxime delectus magnam
                    temporibus assumenda sapiente ullam totam adipisci fugit repellat dignissimos doloremque nobis vel
                    soluta.
                    Quidem, incidunt eum. Ex iste unde suscipit iusto. Voluptatum possimus repudiandae, quod harum provident
                    fugiat temporibus debitis dicta. Cupiditate nesciunt dolore iusto, sint quae error? Beatae quod natus
                    voluptatem adipisci consectetur mollitia nobis necessitatibus sunt quisquam optio veniam amet minus
                    suscipit
                    tenetur, facere reiciendis! Consequatur, consectetur? Id doloribus temporibus dolorem totam corrupti
                    deleniti. Porro atque deleniti ipsam nam laboriosam quo! Rem tempore quisquam perspiciatis suscipit
                    similique fugit sequi autem impedit alias quasi deleniti cupiditate molestiae, fugiat ullam maiores
                    mollitia
                    voluptatibus officiis nisi ipsum eaque.</p>
            </div>
        </div>

    </form>
@endsection

@section('js_links')
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="module" src="{{ asset('js/book_room.js') }}"></script>
@endsection
