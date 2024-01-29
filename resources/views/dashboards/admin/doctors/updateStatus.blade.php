<!-- Modal -->
<div class="modal fade" id="update_status{{ $doctor->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    {{ trans('doctors.Status_change') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('doctors.changeStatus' , $doctor->id)}}" method="post" autocomplete="off">
                {{ csrf_field() }}
                @method('PUT') <!-- Use PUT method spoofing -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="status">{{ trans('doctors.Status') }}</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="" disabled>--{{ trans('doctors.Choose') }}--</option>
                            <option value="1" @if ($doctor->status === 1) selected @endif>{{ trans('doctors.Enabled') }}</option>
                            <option value="0" @if ($doctor->status === 0) selected @endif>{{ trans('doctors.Not_enabled') }}</option>
                        </select>
                    </div>
{{--                    <input type="hidden" name="id" value="{{ $doctor->id }}">--}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/sections_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/sections_trans.submit')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
