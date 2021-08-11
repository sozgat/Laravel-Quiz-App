<x-app-layout>
    <x-slot name="header">Create Quiz</x-slot>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('quizzes.store') }}">
                @csrf
                <div class="mb-3">
                    <label>Quiz Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label>Quiz Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <input id="isFinished" @if(old('finished_at')) checked @endif type="checkbox">
                    <label>Do you want a finishing date?</label>
                </div>
                <div id="finishedInput" @if(!old('finished_at')) style="display: none" @endif class="mb-3">
                    <label>Quiz Finishing Date</label>
                    <input type="datetime-local" id="finished_at" name="finished_at" value="{{ old('finished_at') }}" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success btn-sm w-100">Create Quiz</button>
                </div>
            </form>
        </div>
    </div>
    <x-slot name="js">
        <script>
            window.addEventListener('load', function() {
                $('#isFinished').change(function (){
                    if ($('#isFinished').is(':checked')){
                        $('#finishedInput').show();
                    }
                    else{
                        $("#finished_at").val("yyyy-aa-ggT--:--");
                        $('#finishedInput').hide();
                    }
                })
            })

        </script>
    </x-slot>
</x-app-layout>
