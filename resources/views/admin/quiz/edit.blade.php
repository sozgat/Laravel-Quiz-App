<x-app-layout>
    <x-slot name="header">Update Quiz</x-slot>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('quizzes.update', $quiz->id) }}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label>Quiz Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $quiz->title }}">
                </div>
                <div class="mb-3">
                    <label>Quiz Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ $quiz->description }}</textarea>
                </div>
                <div class="mb-3">
                    <input id="isFinished" @if($quiz->finished_at) checked @endif type="checkbox">
                    <label>Do you want a finishing date?</label>
                </div>
                <div id="finishedInput" @if(!$quiz->finished_at) style="display: none" @endif class="mb-3">
                    <label>Quiz Finishing Date</label>
                    <input type="datetime-local" id="finished_at" name="finished_at" @if($quiz->finished_at) value="{{ date('Y-m-d\TH:i', strtotime($quiz->finished_at)) }}" @endif class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success btn-sm w-100">Update Quiz</button>
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
