function emailNotVerified(){
    Swal.fire('Ainda não verificaste o teu email.');
}     


function pro() {
    Swal.fire({
        title: 'Processando...',
        html: '<div class="progress"><div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>',
        showCancelButton: false,
        showConfirmButton: false,
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        onBeforeOpen: () => {
            Swal.showLoading();

            // Simular uma tarefa com progresso
            let progress = 0;
            const interval = setInterval(() => {
                progress += 5;
                if (progress <= 100) {
                    $('.progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);
                } else {
                    clearInterval(interval);
                    Swal.close();
                    Swal.fire({
                        icon: 'success',
                        title: 'Tarefa Concluída!',
                        text: 'A tarefa foi concluída com sucesso.',
                    });
                }
            }, 500);
        }
    });
}

let recorder;
let isRecording = false;
let startTime;

const startButton = document.getElementById("startRecordingButton");

startButton.addEventListener("click", async () => {
    if (!isRecording) {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            recorder = new RecordRTC(stream, {
                type: "audio",
                mimeType: "audio/wav",
            });

            recorder.startRecording();
            isRecording = true;
            startTime = Date.now();

            Swal.fire({
                title: 'Gravação em Andamento',
                html: 'Tempo decorrido: <span id="timer">0</span> segundos<br><audio controls id="audioPlayer"></audio>',
                showCancelButton: true,
                cancelButtonText: 'Parar',
                footer: '<button id="pauseResumeButton">Pausar</button>',
                onOpen: () => {
                    const timerElement = document.getElementById('timer');
                    const audioPlayer = document.getElementById('audioPlayer');
                    const pauseResumeButton = Swal.getFooter().querySelector('#pauseResumeButton');

                    audioPlayer.src = URL.createObjectURL(new Blob(), { type: "audio/wav" });
                    audioPlayer.controls = true;
                    audioPlayer.play();

                    const timerInterval = setInterval(() => {
                        if (isRecording) {
                            const elapsedTime = Math.floor((Date.now() - startTime) / 1000);
                            timerElement.textContent = elapsedTime;
                        } else {
                            clearInterval(timerInterval);
                        }
                    }, 1000);

                    pauseResumeButton.addEventListener('click', () => {
                        if (recorder.getState() === 'recording') {
                            recorder.pauseRecording();
                            isRecording = false;
                            pauseResumeButton.textContent = 'Retomar';
                            audioPlayer.pause();
                        } else if (recorder.getState() === 'paused') {
                            recorder.resumeRecording();
                            isRecording = true;
                            startTime = Date.now();
                            pauseResumeButton.textContent = 'Pausar';
                            audioPlayer.play();
                        }
                    });
                },
                preConfirm: () => {
                    if (recorder.getState() === 'recording') {
                        recorder.stopRecording(() => {
                            const audioBlob = recorder.getBlob();
                            const audioUrl = URL.createObjectURL(audioBlob);

                            const audioPlayer = new Audio(audioUrl);
                            audioPlayer.controls = true;

                            Swal.fire({
                                title: 'Gravação Concluída',
                                html: `Áudio Gravado:<br><audio controls src="${audioUrl}"></audio>`,
                            });
                        });
                    }
                },
            });
        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Não foi possível acessar o microfone.'
            });
        }
    }
});

function swalq() {
    Swal.fire({
        title: 'Gravação Concluída',
        html: `<audio controls src=""></audio>`,
    });
}
