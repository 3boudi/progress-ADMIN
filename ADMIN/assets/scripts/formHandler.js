document.getElementById('number_of_modules').addEventListener('input', function () {
    const numberModules = parseInt(this.value);
    const container = document.getElementById('modulesContainer');
    container.innerHTML = ''; 

    for (let i = 0; i < numberModules; i++) {
        const div = document.createElement('div');
        div.className = 'form-group';
        div.innerHTML = `
            <label for="note_of_modules_${i}">Module ${i + 1} Note (0-20):</label>
            <input type="number" id="note_of_modules_${i}" name="note_of_modules[]" required min="0" max="20" step="0.01">
        `;
        container.appendChild(div);
    }
});
