<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Agendas') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="box">    
                      <div class="p-6 text-gray-900 dark:text-gray-100 mb" style="margin-bottom:-20px;">
                      <!--Citas agendadas-->
                      <h1 class="text-xl font-bold ml-4 mb-5">
                              Citas agendadas
                      </h1>  
                  
                      <div class="stats shadow" style="color:white; width:1170px; background-color:#040c1e;">
                                  
                          <div class="stat">
                              <div class="stat-figure text-secondary">
                              <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>-->
                              <a href="{{route('historial.reporte', ['tipo' => 'agendadas_ttl'])}}" class="btn btn-xs btn-color">Ver</a>
          
                          </div>
                              <div class="stat-title">Total citas agendadas</div>
                              <div class="stat-value">{{$citas_agendadas['citas_agendadas']}}</div>
                              <div class="stat-desc"></div>
                          </div>

                          <div class="stat">
                              <div class="stat-figure text-secondary">
                              <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>-->
                              <a href="{{route('historial.reporte', ['tipo' => 'agendadas_dia'])}}" class="btn btn-xs btn-color">Ver</a>
  
                          </div>
                              <div class="stat-title">Citas agendadas del día</div>
                              <div class="stat-value">{{$citas_agendadas['citas_agendadas_dia']}}</div>
                              <div class="stat-desc">{{\Carbon\Carbon::now()->format('d-m-Y')}}</div>
                          </div>
                          
                          <div class="stat">
                              <div class="stat-figure text-secondary">
                              <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>-->
                              <a href="{{route('historial.reporte', ['tipo' => 'agendadas_semana'])}}" class="btn btn-xs btn-color">Ver</a>
  
                          </div>
                              <div class="stat-title">Citas agendadas de la semana</div>
                              <div class="stat-value">{{$citas_agendadas['citas_agendadas_semana']}}</div>
                              <div class="stat-desc">{{\Carbon\Carbon::now()->startOfWeek()->format('d-m-Y')}} al {{\Carbon\Carbon::now()->endOfWeek()->format('d-m-Y')}}</div>
                          </div>
                          
                          <div class="stat">
                              <div class="stat-figure text-secondary">
                              <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>-->
                              <a href="{{route('historial.reporte', ['tipo' => 'agendadas_mes'])}}" class="btn btn-xs btn-color">Ver</a>
                          </div>
                              <div class="stat-title">Citas agendadas del mes</div>
                              <div class="stat-value">{{$citas_agendadas['citas_agendadas_mes']}}</div>
                              <div class="stat-desc">{{\Carbon\Carbon::now()->startOfMonth()->format('d-m-Y')}} al {{\Carbon\Carbon::now()->endOfMonth()->format('d-m-Y')}}</div>
                          </div>
                          </div>
                      </div>
                  </div>
              <!--Citas atendidas-->

              <div class="box">
                      <h1 class="text-xl font-bold ml-10 mt-5 " style="color:white;">
                              Citas atendidas
                      </h1>  
                      
                      <div class="stats shadow ml-5 mt-5" style="color:white; width:1170px; background-color:#091a32;">
                                          
                          <div class="stat">
                              <div class="stat-figure text-secondary">
                          <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>-->
                             <button class="btn btn-xs btn-success">Ver</button>
                     
                          </div>
                              <div class="stat-title">Total citas atendidas</div>
                              <div class="stat-value">{{$citas_atendidas['citas_atendidas']}}</div>
                              <div class="stat-desc"></div>
                          </div>

                          <div class="stat">
                              <div class="stat-figure text-secondary">
                          <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>-->
                          <button class="btn btn-xs btn-success">Ver</button>   
                          </div>
                              <div class="stat-title">Citas atendidas del día</div>
                              <div class="stat-value">{{$citas_atendidas['citas_atendidas_dia']}}</div>
                              <div class="stat-desc">{{\Carbon\Carbon::now()->format('d-m-Y')}}</div>
                          </div>
                          
                          <div class="stat">
                              <div class="stat-figure text-secondary">
                              <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>-->
                              <button class="btn btn-xs btn-success">Ver</button>    
                          </div>
                              <div class="stat-title">Citas atendidas de la semana</div>
                              <div class="stat-value">{{$citas_atendidas['citas_atendidas_semana']}}</div>
                              <div class="stat-desc">{{\Carbon\Carbon::now()->startOfWeek()->format('d-m-Y')}} al {{\Carbon\Carbon::now()->endOfWeek()->format('d-m-Y')}}</div>
                          </div>
                          
                          <div class="stat">
                              <div class="stat-figure text-secondary">
                              <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>-->
                              <button class="btn btn-xs btn-success">Ver</button>
          
                          </div>
                              <div class="stat-title">Citas atendidas del mes</div>
                              <div class="stat-value">{{$citas_atendidas['citas_atendidas_mes']}}</div>
                              <div class="stat-desc">{{\Carbon\Carbon::now()->startOfMonth()->format('d-m-Y')}} al {{\Carbon\Carbon::now()->endOfMonth()->format('d-m-Y')}}</div>
                          </div>
                      
                          </div>
                  </div>
                  <!--Citas canceladas-->

                  <div class="box">
                  <h1 class="text-xl font-bold ml-10 mt-5 bg-orange-500 w-fit p-2 rounded-full">
                      Citas canceladas
                  </h1>  
              
                  <div class="stats shadow ml-5 mt-5" style="color:white; width:1170px; background-color:#2352a0;">
                                    
                  <div class="stat">
                      <div class="stat-figure text-secondary">
                      <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>-->
                      <button class="btn  btn-xs btn-success">Ver</button>    
                  </div>
                      <div id="b" class="stat-title">Total citas canceladas</div>
                      <div class="stat-value">{{$citas_canceladas['citas_canceladas']}}</div>
                      <div class="stat-desc"></div>
                  </div>

                  <div class="stat">
                      <div class="stat-figure text-secondary">
                     <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>-->
                     <button class="btn btn-xs btn-success">Ver</button>
                  </div>
                      <div class="stat-title">Citas canceladas del día</div>
                      <div class="stat-value">{{$citas_canceladas['citas_canceladas_dia']}}</div>
                      <div class="stat-desc">{{\Carbon\Carbon::now()->format('d-m-Y')}}</div>
                  </div>
                  
                  <div class="stat">
                      <div class="stat-figure text-secondary">
                      <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>-->
                      <button class="btn btn-xs btn btn-success">Ver</button>

                  </div>
                      <div class="stat-title">Citas canceladas de la semana</div>
                      <div class="stat-value">{{$citas_canceladas['citas_canceladas_semana']}}</div>
                      <div class="stat-desc">{{\Carbon\Carbon::now()->startOfWeek()->format('d-m-Y')}} al {{\Carbon\Carbon::now()->endOfWeek()->format('d-m-Y')}}</div>
                  </div>
                  
                  <div class="stat" >
                      <div class="stat-figure text-secondary">
                      <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>-->
                      <button class="btn btn-xs btn-success">Ver</button>

                  </div>
                      <div class="stat-title">Citas canceladas del mes</div>
                      <div class="stat-value">{{$citas_canceladas['citas_canceladas_mes']}}</div>
                      <div class="stat-desc">{{\Carbon\Carbon::now()->startOfMonth()->format('d-m-Y')}} al {{\Carbon\Carbon::now()->endOfMonth()->format('d-m-Y')}}</div>
                  </div>
                  </div>
                  </div>
                  
                  <!--Procedimientos realizados-->
                  
                  <div class="box">                  
                      <h1 class="text-xl font-bold ml-10 mt-5">
                              Procedimientos realizados
                      </h1>  
                      
                      <div class="stats shadow ml-5 mt-5 bg-primary" style="color:white; width:1170px; background-color:#496063;">
                                          
                          <div class="stat">
                              <div class="stat-figure text-secondary">
                              <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>-->
                              <button class="btn btn-xs btn-success">Ver</button>

                          </div>
                              <div class="stat-title">Total procedimientos</div>
                              <div class="stat-value">{{$procedimientos['procedimientos']}}</div>
                              <div class="stat-desc"></div>
                          </div>

                          <div class="stat">
                              <div class="stat-figure text-secondary">
                          <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>-->
                          <button class="btn btn-xs btn-success">Ver</button>
                          </div>
                              <div class="stat-title">Procedimientos del día</div>
                              <div class="stat-value">{{$procedimientos['procedimientos_dia']}}</div>
                              <div class="stat-desc">{{\Carbon\Carbon::now()->format('d-m-Y')}}</div>
                          </div>
                          
                          <div class="stat">
                              <div class="stat-figure text-secondary">
                              <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>-->
                              <button class="btn btn-xs btn-success">Ver</button>

                          </div>
                              <div class="stat-title">Procedimientos de la semana</div>
                              <div class="stat-value">{{$procedimientos['procedimientos_semana']}}</div>
                              <div class="stat-desc">{{\Carbon\Carbon::now()->startOfWeek()->format('d-m-Y')}} al {{\Carbon\Carbon::now()->endOfWeek()->format('d-m-Y')}}</div>
                          </div>
                          
                          <div class="stat" >
                              <div class="stat-figure text-secondary">
                              <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>-->
                              <button class="btn btn-xs btn-success">Ver</button>

                          </div>
                              <div class="stat-title">Procedimientos del mes</div>
                              <div class="stat-value">{{$procedimientos['procedimientos_mes']}}</div>
                              <div class="stat-desc">{{\Carbon\Carbon::now()->startOfMonth()->format('d-m-Y')}} al {{\Carbon\Carbon::now()->endOfMonth()->format('d-m-Y')}}</div>
                          </div>
                      
                          </div>
                      </div>  
                  </div>

              </div>
              </div>
          </div>

      </div>
  </div>

  <script>
      // alerta de eliminación de procedimiento
      document.querySelectorAll('form').forEach(form => {
          form.addEventListener('submit', function(e) {
              if (!confirm('¿Estás seguro de eliminar esta agenda?')) {
                  e.preventDefault();
              }
          })
      })
  </script>

  <style>

      .box{
          border-radius:10px; padding-bottom:20px; border: 1px solid gray;
          margin-bottom:30px;
          color:white;
      }

      .btn-color{
          background-color:#d926aa;
          color:white;
      }
      .btn-color:hover {
background-color: #089000;
}
  </style>

</x-app-layout>