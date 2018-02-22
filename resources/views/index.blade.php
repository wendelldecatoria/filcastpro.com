@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
    <a href="{{route('web.home')}}" >
        <table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="position:absolute;bottom:0px;">
            <tr>
                <td height="500"></td>
            </tr>
    </table>
    </a>
@endsection

@section('js')
        <script type="text/javascript">
            
        </script>
@endsection

