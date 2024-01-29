<!-- Modal -->
<div class="modal fade" id="delete{{ $doctor->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    {{ trans('doctors.delete_doctor') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="post">
                {{ method_field('delete') }}
                {{ csrf_field() }}
                <input type="hidden" value="1" name="page_id">
                <div class="modal-body text-center">
                    <h5>{{trans('sections_trans.Warning')}} {{$doctor->name}}</h5>
                    @if($doctor->image)
                        <div class="d-flex justify-content-center align-items-center">
                            <img  style="border-radius: 50%;" src="{{ url('attachments/Doctors/' . $doctor->image->file_name) }}" height="100px" width="100px" alt="">
                        </div>
                    @else
                        <div class="d-flex justify-content-center align-items-center">
                            <img style="border-radius: 50%;" src="{{Url::asset('attachments/Doctors/default_doctor_photo.jpg')}}" height="100px" width="100px" alt="">
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/sections_trans.Close')}}</button>
                    <button type="submit" class="btn btn-danger">{{trans('Dashboard/sections_trans.submit')}}</button>
                </div>
            </form>

        </div>
    </div>
</div>
