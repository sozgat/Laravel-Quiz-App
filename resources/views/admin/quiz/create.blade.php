<x-app-layout>
    <x-slot name="header">Create Quiz</x-slot>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('quizzes.store') }}">
                @csrf
                <div class="mb-3">
                    <label>Quiz Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Quiz Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <input id="isFinished" type="checkbox">
                    <label>Do you want a finishing date?</label>
                </div>
                <div id="finishedInput" style="display: none" class="mb-3">
                    <label>Quiz Finishing Date</label>
                    <input type="datetime-local" name="finished_at" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success btn-sm w-100">Create Quiz</button>
                </div>
            </form>
        </div>
    </div>
    <x-slot name="js">
        <script>
            $('#isFinished').change(function (){
                if ($('#isFinished').is(':checked')){
                    $('#finishedInput').show();
                }
                else{
                    $('#finishedInput').hide();
                }
            })
        </script>
    </x-slot>
</x-app-layout>
