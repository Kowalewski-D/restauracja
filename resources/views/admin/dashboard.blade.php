@extends('layouts.app')

@section('title','Dashboard')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"</link>
@endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-success">
                            <div class="ct-chart" id="dailySalesChart"></div>
                        </div>
                        <div class="card-body">
                            <p class="card-category">Kategorie / Przedmioty</p>
                            <h4 class="card-title">{{ $categoryCount }}/{{ $itemCount }}</h4>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">info</i>
                                <a href="{{ route('category.index') }}">Wszystkie Kategorie</a>
                                <p>&nbsp;i&nbsp;</p>
                                <a href="{{ route('item.index') }}"> Przedmioty</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                            <div class="ct-chart" id="websiteViewsChart"></div>
                        </div>
                        <div class="card-body">
                            <p class="card-category">Liczba slajdów</p>
                            <h4 class="card-title">{{ $sliderCount }}</h4>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i>
                                <a href="{{ route('slider.index') }}">Więcej szczegółów ...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-danger">
                            <div class="ct-chart" id="completedTasksChart"></div>
                        </div>
                        <div class="card-body">
                            <p class="card-category">Nie potwierdzone rezerwacje</p>
                            <h4 class="card-title">{{ $reservations->count() }}</h4>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i>
                                <a href="{{ route('reservation.index') }}">Więcej szczegółów ...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-danger">
                            <div class="ct-chart" id="completedTasksChart"></div>
                        </div>
                        <div class="card-body">
                            <p class="card-category">Wiadomości</p>
                            <h4 class="card-title">{{ $contactCount }}</h4>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i>
                                <a href="{{ route('contact.index') }}">Sprawdź</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Rezerwacje</h4>
                            <p>Rezerwacje do potwierdzenia</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Imie
                                    </th>
                                    <th>
                                        Nazwisko
                                    </th>
                                    <th>
                                        Ilość osób
                                    </th>
                                    <th>
                                        Telefon
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Akcje
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($reservations as $key=>$reservation)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>
                                            <td>
                                                {{ $reservation->first_name }}
                                            </td>
                                            <td>
                                                {{ $reservation->last_name }}
                                            </td>
                                            <td>
                                                {{ $reservation->how_many_people }}
                                            </td>
                                            <td>
                                                {{ $reservation->phone }}
                                            </td>
                                            <th>
                                                @if($reservation->status == true)
                                                    <span class="label label-info">Potwierdzone</span>
                                                @else
                                                    <span class="label label-danger">Nie potwierdzone</span>
                                                @endif
                                            </th>
                                            <td>
                                                @if($reservation->status == false)

                                                    <form id="status-form-{{ $reservation->id }}" action="{{ route('reservation.status',$reservation->id) }}" style="display: none;" method="POST">
                                                        @csrf
                                                    </form>

                                                    <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Jesteś pewien, że potwierdzasz?'))
                                                            {
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{ $reservation->id }}').submit();
                                                            }
                                                            else {
                                                            event.preventDefault();
                                                            }">
                                                        <i class="material-icons">done</i></button>
                                                @endif

                                                <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.destroy',$reservation->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Jesteś pewien, że chcesz usunąć?'))
                                                        {
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $reservation->id }}').submit();
                                                        }
                                                        else {
                                                        event.preventDefault();
                                                        }">
                                                    <i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
@endpush