@extends('layouts.layanan')

@section('content')

<style>
        /* Multi-step progress bar styling */
        .progress-steps {
            position: relative;
        }
        .progress-steps::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #e5e7eb; /* gray-200 */
            z-index: 10;
        }
        .step {
            z-index: 20;
        }
        .step-icon {
            transition: background-color 0.3s, color 0.3s;
        }
        .step.active .step-icon {
            background-color: #3b82f6; /* blue-500 */
            color: white;
        }
        .step.active .step-label {
            color: #3b82f6; /* blue-500 */
            font-weight: 600;
        }
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
        }
        /* Custom file preview */
        .file-preview {
            border-left: 4px solid #10b981; /* emerald-500 */
        }
</style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-12 max-w-4xl">
        <div class="bg-white shadow-xl rounded-xl overflow-hidden">
            <div class="bg-blue-600 text-white p-5">
                <h4 class="text-2xl font-semibold">Pengajuan Surat Keterangan Domisili</h4>
            </div>
            <div class="p-6 sm:p-8">
                <form action="#" method="POST" enctype="multipart/form-data" id="submissionForm">
                    <input type="hidden" name="category_id" value="1">

                    <div class="progress-steps flex justify-between mb-8">
                        <div class="step active text-center flex-1">
                            <div class="step-icon w-10 h-10 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold mx-auto mb-1">1</div>
                            <div class="step-label text-sm text-blue-500 font-semibold">Data Diri</div>
                        </div>
                        <div class="step text-center flex-1">
                            <div class="step-icon w-10 h-10 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold mx-auto mb-1">2</div>
                            <div class="step-label text-sm text-gray-600">Dokumen</div>
                        </div>
                        <div class="step text-center flex-1">
                            <div class="step-icon w-10 h-10 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold mx-auto mb-1">3</div>
                            <div class="step-label text-sm text-gray-600">Konfirmasi</div>
                        </div>
                    </div>

                    <div class="form-step active" id="step1">
                        <h5 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Data Pemohon</h5>
                        
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Nama Lengkap
                                <span class="text-red-500">*</span>
                            </label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" name="form_data[full_name]" required>
                            </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Nomor Induk Kependudukan (NIK)
                                <span class="text-red-500">*</span>
                            </label>
                            <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" name="form_data[nik]" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Tanggal Lahir
                                <span class="text-red-500">*</span>
                            </label>
                            <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" name="form_data[birth_date]" required>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Keperluan <span class="text-red-500">*</span></label>
                            <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" name="purpose" rows="3" required placeholder="Jelaskan keperluan pengajuan surat ini"></textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="button" class="px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="nextStep()">
                                Selanjutnya 
                                <span class="ml-2 inline-block transform translate-y-px">&#8594;</span>
                            </button>
                        </div>
                    </div>

                    <div class="form-step" id="step2">
                        <h5 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Upload Dokumen Pendukung</h5>
                        
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                KARTU TANDA PENDUDUK (KTP)
                                <span class="text-red-500">*</span>
                            </label>
                            <input type="file" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" name="documents[ktp]" accept=".pdf,.jpg,.jpeg,.png" required onchange="previewFile(this, 'ktp')">
                            <p class="mt-1 text-xs text-gray-500">Format: PDF, JPG, PNG (Maks. 5MB)</p>
                            <div id="preview-ktp" class="mt-2"></div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                KARTU KELUARGA (KK)
                                <span class="text-red-500">*</span>
                            </label>
                            <input type="file" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" name="documents[kk]" accept=".pdf,.jpg,.jpeg,.png" required onchange="previewFile(this, 'kk')">
                            <p class="mt-1 text-xs text-gray-500">Format: PDF, JPG, PNG (Maks. 5MB)</p>
                            <div id="preview-kk" class="mt-2"></div>
                        </div>
                        <div class="flex justify-between pt-4 border-t border-gray-200">
                            <button type="button" class="px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="prevStep()">
                                <span class="mr-2 inline-block transform translate-y-px">&#8592;</span>
                                Kembali
                            </button>
                            <button type="button" class="px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="nextStep()">
                                Selanjutnya 
                                <span class="ml-2 inline-block transform translate-y-px">&#8594;</span>
                            </button>
                        </div>
                    </div>

                    <div class="form-step" id="step3">
                        <h5 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Konfirmasi Pengajuan</h5>
                        
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-6 rounded">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" /></svg>
                                </div>
                                <div class="ml-3 text-sm text-blue-700">
                                    Mohon periksa kembali data Anda sebelum submit. Pastikan semua data sudah benar.
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 shadow-sm rounded-lg p-4 mb-6">
                            <h6 class="text-base font-medium text-gray-500 mb-3 border-b pb-2">Ringkasan Pengajuan</h6>
                            <dl class="grid grid-cols-3 gap-y-2 text-sm">
                                <dt class="col-span-1 font-medium text-gray-700">Jenis Surat:</dt>
                                <dd class="col-span-2 text-gray-900">Surat Keterangan Domisili</dd>
                                
                                <dt class="col-span-1 font-medium text-gray-700">Kode Surat:</dt>
                                <dd class="col-span-2 text-gray-900">S.KET.DOM</dd>
                                
                                <dt class="col-span-1 font-medium text-gray-700">Keperluan:</dt>
                                <dd class="col-span-2 text-gray-900 italic">Untuk mendaftar sekolah anak.</dd>
                            </dl>
                        </div>

                        <div class="flex items-start mb-6">
                            <input class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 mt-1" type="checkbox" id="agreeTerms" required>
                            <label class="ml-2 text-sm font-medium text-gray-900" for="agreeTerms">
                                Saya menyatakan bahwa data yang saya berikan adalah benar dan dapat dipertanggungjawabkan
                            </label>
                        </div>

                        <div class="flex justify-between pt-4 border-t border-gray-200">
                            <button type="button" class="px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="prevStep()">
                                <span class="mr-2 inline-block transform translate-y-px">&#8592;</span>
                                Kembali
                            </button>
                            <button type="submit" class="px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                <svg class="w-4 h-4 mr-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Submit Pengajuan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
let currentStep = 1;

function updateSteps(newStep) {
    document.querySelectorAll('.form-step').forEach(el => el.classList.remove('active'));
    document.getElementById(`step${newStep}`).classList.add('active');

    document.querySelectorAll('.step').forEach(el => el.classList.remove('active'));
    document.querySelector(`.step[data-step="${newStep}"]`).classList.add('active');

    currentStep = newStep;
}

function nextStep() {
    if (validateStep(currentStep)) {
        if (currentStep < 3) {
            updateSteps(currentStep + 1);
        }
    }
}

function prevStep() {
    if (currentStep > 1) {
        updateSteps(currentStep - 1);
    }
}

function validateStep(step) {
    const stepElement = document.getElementById(`step${step}`);
    const requiredInputs = stepElement.querySelectorAll('[required]');
    let valid = true;
    
    requiredInputs.forEach(input => {
        // Simple check for required fields
        if (!input.value) {
            input.classList.add('border-red-500', 'ring-red-500');
            valid = false;
        } else {
            input.classList.remove('border-red-500', 'ring-red-500');
        }
    });
    
    return valid;
}

function previewFile(input, docType) {
    const preview = document.getElementById(`preview-${docType}`);
    const file = input.files[0];
    
    if (file) {
        const fileSize = (file.size / 1024 / 1024).toFixed(2);
        preview.innerHTML = `
            <div class="file-preview p-3 mt-2 bg-green-50 text-green-700 text-sm rounded">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <strong class="font-medium">${file.name}</strong> 
                    <span class="ml-auto text-xs">(${fileSize} MB)</span>
                </div>
            </div>
        `;
    } else {
        preview.innerHTML = '';
    }
}
</script>
</body>

@endsection

 