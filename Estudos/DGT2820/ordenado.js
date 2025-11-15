// a) Função swap
const swap = (arr, i, j) => {
    [arr[i], arr[j]] = [arr[j], arr[i]];
};

// b) Função shuffle
const shuffle = (arr, quantidade) => {
    for (let k = 0; k < quantidade; k++) {
        // Escolhe duas posições aleatórias
        const i = Math.floor(Math.random() * arr.length);
        const j = Math.floor(Math.random() * arr.length);
        swap(arr, i, j);
    }
    return arr;
};

// c) Função bubble_sort
const bubble_sort = (arr) => {
    const n = arr.length;
    for (let i = 0; i < n - 1; i++) {
        for (let j = 0; j < n - 1 - i; j++) {
            if (arr[j] > arr[j + 1]) {
                swap(arr, j, j + 1);
            }
        }
    }
    return arr;
};

// d) Função selection_sort
const selection_sort = (arr) => {
    const n = arr.length;
    for (let i = 0; i < n - 1; i++) {
        let min_idx = i;
        for (let j = i + 1; j < n; j++) {
            if (arr[j] < arr[min_idx]) {
                min_idx = j;
            }
        }
        swap(arr, i, min_idx);
    }
    return arr;
};

const quick_sort = (arr, low, high) => {
    if (low < high) {
        const pi = particionamento(arr, low, high);
        quick_sort(arr, low, pi - 1);
        quick_sort(arr, pi + 1, high);
    }
    return arr;
};

const particionamento = (arr, low, high) => {
    const pivot = arr[high];
    let i = (low - 1);
    for (let j = low; j <= high - 1; j++) {
        if (arr[j] <= pivot) {
            i++;
            swap(arr, i, j);
        }
    }
    swap(arr, i + 1, high);
    return (i + 1);
};

// Função para Quick Sort
const quick_sort_start = (arr) => {
    return quick_sort(arr, 0, arr.length - 1);
};
