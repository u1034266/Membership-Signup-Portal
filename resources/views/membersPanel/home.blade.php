@extends('layouts.template')

@section('title', 'Member Signup Portal')

@section('content')
    <div class="panel-body">
        <h1><center><strong>Member Signup Portal</strong></center></h1>

        <table class="table table-hover col-lg-12">
            <thead>
                <th nowrap>First Name</th>
                <th nowrap>Last Name</th>
                <th nowrap>Gender</th>
                <th nowrap>Date Joined</th>

                {{-- Visible to admins only --}}
                @if(Auth::Check())
                    <th nowrap>Address</th>
                    <th nowrap>Emergency Contact</th>
                    <th nowrap>Emergency Contact Number</th>
                    <th nowrap>Relationship</th>
                    <th nowrap>Long Term Goal</th>
                    <th nowrap>Admin Actions</th>
                @endif
            </thead>
            <tbody class="table table-striped">
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->firstname }}</td>
                        <td>{{ $post->lastname }}</td>
                        <td>
                            @if( $post->gender == 1 )
                                Male
                            @elseif ( $post->gender == 0 )
                                Female
                            @endif
                        </td>
                        <td>{{ date_format($post->created_at, 'jS F Y g:ia') }}</td>

                        {{-- Visible to admins only --}}
                        @if(Auth::Check())
                            <td>{{ $post->address_line1 . "," . $post->address_line2 . "," . $post->address_line3 . " " . $post->postcode  }}</td>
                            <td>{{ $post->ec_person }}</td>
                            <td>{{ $post->ec_phone_number }}</td>
                            <td>{{ $post->ec_relationship }}</td>
                            <td>{{ $post->longterm_goal }}</td>
                            <td nowrap>
                                <a href="{{ route('posts.edit', ['id'=>$post->id]) }}" class="label label-info">Edit</a> /
                                <form action="{{ route('posts.destroy', ['id'=>$post->id]) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" class="btn btn-danger btn-xs" value="Delete">
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection