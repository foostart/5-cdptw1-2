<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-830">
	<div class="container">
		<h2>The columns titles are merged with the filters inputs thanks to the placeholders attributes</h2>
		<div class="creatediv1">
			<div class="row item">
				<div class="panel panel-primary filterable">
						<div class="panel-heading">
							<h3 class="panel-title">Cost Centers<span></span></h3>
							<div class="pull-right">
								<button type="button" class="btn btn-default btn-xs btn-filter"><span class="fa fa-filter"></span> Filter</button>
							</div>
						</div>

						<table class="span12">
							<table class="table table-bordered table-striped" style="list-style: none" >
								<tr class="filters">
									<th  >
										<div class="checkbox radio-margin">
											<label>
												<input type="checkbox" id="select_all"	>
												<span class="cr"><i class="cr-icon fa fa-check"></i></span>
											</label>
										</div>
									</th>

									<th style="width: 48%">
										Cost Center Name
									</th>

									<th style="width: 49.8%">
										Cost Center ID
									</th>
								</tr>
							</table>

							<div class="bg tablescroll">
								<table class="table table-bordered table-striped" style="list-style: none" >
									<tr>
										<td style="width: 4%">
											<div class="checkbox radio-margin">
												<label>
													<input class="checkbox" id="label01" type="checkbox" name="check[]" >
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
                                                                                
                                                                              
                                                                                
										<label for="label01"> <td>BYU-I</td> </label>
                                                                                
										<label for="label01"> <td style="width: 48%">542584612548</td> </label>
                                                                                
									</tr>

									<tr>
										<td>
											<div class="checkbox radio-margin">
												<label>
													<input class="checkbox" type="checkbox" name="check[]">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td >Timesheet</td>
										<td >652145875623</td>
									</tr>

									<tr>
										<td >
											<div class="checkbox radio-margin">
												<label>
													<input class="checkbox" type="checkbox" name="check[]">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td>Compro</td>
										<td >854785412563</td>
									</tr>

									<tr>
										<td>
											<div class="checkbox radio-margin">
												<label>
													<input class="checkbox" type="checkbox" name="check[]">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td >Compro</td>
										<td >854785412563</td>
									</tr>

									<tr>
										<td >
											<div class="checkbox radio-margin">
												<label>
													<input class="checkbox" type="checkbox" name="check[]">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td >Compro</td>
										<td >854785412563</td>
									</tr>

									
								</table>
							</div>
						</table>
					</div>
			</div>
		</div>
	</div>
</div>