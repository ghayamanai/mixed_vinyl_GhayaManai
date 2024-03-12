import { Controller } from '@hotwired/stimulus';
import axios from 'axios';

export default class extends Controller {
    static values = {
        infoUrl: String,
    };

    play(event) {
        event.preventDefault();

        const currentAudio = this.element.dataset.currentAudio;
        if (currentAudio && !currentAudio.paused) {
            currentAudio.pause();
            currentAudio.currentTime = 0;
        }

        axios.get(this.infoUrlValue)
            .then((response) => {
                const audio = new Audio(response.data.url);
                this.element.dataset.currentAudio = audio; 
                audio.play();
            });
    }
}
