@extends('layouts.app')

@section('title','Reservation')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"</link>
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Wszystkie rezerwacje</h4>
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
                                        Email
                                    </th>
                                    <th>
                                        Ilość osób
                                    </th>
                                    <th>
                                        Telefon
                                    </th>
                                    <th>
                                        Data
                                    </th>
                                    <th>
                                        Czas
                                    </th>
                                    <th>
                                        Wiadomość
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Stworzono
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
                                                    {{ $reservation->email }}
                                                </td>
                                                <td>
                                                    {{ $reservation->how_many_people }}
                                                </td>
                                                <td>
                                                    {{ $reservation->phone }}
                                                </td>
                                                <td>
                                                    {{ $reservation->date }}
                                                </td>
                                                <td>
                                                    {{ $reservation->time }}
                                                </td>
                                                <td>
                                                    {{ $reservation->message }}
                                                </td>
                                                <th>
                                                    @if($reservation->status == true)
                                                        <span class="label label-info">Potwierdzone</span>
                                                    @else
                                                        <span class="label label-danger">Nie potwierdzone</span>
                                                    @endif
                                                </th>
                                                <td>
                                                    {{ $reservation->created_at }}
                                                </td>
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